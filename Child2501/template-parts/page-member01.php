<!-- メンバー一覧ページ内容 -->
<?php 
 $custom_fields = get_post_custom();  
 #$my_custom_field = $custom_fields['天気']; // '天気' というキーを持つカスタムフィールドの値を取得

?>

<div id="profile" class="profile">
    <div class="profile__inner">
        <h2 class="main__fttl">profile</h2>

        <div class="profile__blc">
            <div class="profile__blc--img">
                <div class="profile__blc--imginner">
                <?php $image = get_field('image'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="photo01" />
                <?php endif; ?>
                <?php $image = get_field('image'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="photo02" class="photo02" />
                <?php endif; ?>
            </div>
            <div class="profile__txtblc">
                <p class="profile__name">名前 氏名</p>
                <p class="profile__name--en">NAME NAME</p>

                <div class="profile__personal--wrapper">
                <dl class="profile__personal">
                    <dt>血液型</dt>
                    <dd>O型</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>星座</dt>
                    <dd>双子座</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>身長</dt>
                    <dd>160cm</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>生年月日</dt>
                    <dd>2002年2月2日</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>出身地</dt>
                    <dd>アイルランド</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>趣味</dt>
                    <dd>旅行</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>特技</dt>
                    <dd>英会話英会話英会話英会話英会話 英会話英会話英会話英会話英会話</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>ひとこと</dt>
                    <dd>・・・</dd>
                </dl>
                </div>


                <ul class="profile__link">
                    <li>
                        <a href="" target="_blank" class="sns_twitter"></a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="sns_insta"></a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="sns_tiktok"></a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
</div>