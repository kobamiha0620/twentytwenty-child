//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  関数定義
//----------------------------------------------------------------------
async function loadModules() {
    const gulp = await import("gulp");
    const plumber = (await import("gulp-plumber")).default; // 修正箇所
    const sass = (await import('gulp-sass')).default(require('sass'));
    const autoprefixer = await import("gulp-autoprefixer");
    const purgecss = await import("gulp-purgecss");
    const cleancss = await import("gulp-clean-css");
    const bs = await import("browser-sync");
    const sassGlob = await import("gulp-sass-glob-use-forward");

    const { src, dest, watch, series, parallel } = require('gulp');

    return { gulp, series, sassGlob, plumber, sass, autoprefixer, purgecss, cleancss, bs };
}

async function compile(done) {
    const { gulp, plumber, sass } = await loadModules();
    const { src, dest } = gulp;

    src("./src/sass/**/*.scss")
        .pipe(plumber())                   // watch中にエラーが発生してもwatchが止まらないようにする
        .pipe(sass())                      // sassのコンパイルをする
        // .pipe(autoprefixer())              // ベンダープレフィックスを自動付与する
        .pipe(dest("./"));

    done();
}

async function minify(done) {
    const { gulp, plumber, purgecss, cleancss } = await loadModules();
    const { src, dest } = gulp;

    src("../src/css/*.css")
        .pipe(plumber())                              // watch中にエラーが発生してもwatchが止まらないようにする
        .pipe(sassGlob())                  // glob機能を使って@useや@forwardを省略する

        .pipe(purgecss({
            content: ["../src/*.html", "../src/**/*.js"],  // src()のファイルで使用される可能性のあるファイルを全て指定
        }))
        .pipe(cleancss())                             // コード内の不要な改行やインデントを削除
        .pipe(dest("./"));

    done();
}

async function bsInit(done) {
    const { bs } = await loadModules();

    bs.init({
        proxy: "localhost:10003",       // ローカルにある「Site Domain」に合わせる
        notify: false,                  // ブラウザ更新時に出てくる通知を非表示にする
        open: "external",               // ローカルIPアドレスでサーバを立ち上げる
    });

    done();
}

async function bsReload(done) {
    const { bs } = await loadModules();

    bs.reload();

    done();
}

const watchTask = async (done) => {
    const { gulp } = await loadModules();
    const { watch, series } = gulp;

    watch(["./src/**"], series(compile, bsReload));

    done();
};

//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
// exports.compile = series(compile, watchTask);
// exports.minify = series(minify);
exports.bs =  watchTask; // seriesまたはparallelを使用