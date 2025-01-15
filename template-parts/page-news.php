<div class="front__news">
    <div class="front__news--inner">
        <h2 class="main__subttl">NEWS</h2>
        <div class="front__news--wrapper">
            <div class="front__news--blc">
            <ul class="front__news--lists">
            
                <?php
                $args = array(
                    'cat' => '-1, -4', //メンバーを非表示
                    'posts_per_page' => -1 // 表示件数の指定
                );
                    $posts = get_posts( $args );
                    foreach ( $posts as $post ): // ループの開始
                    setup_postdata( $post ); // 記事データの取得
                ?>
                <li class="front__news--li">
                    <a href="<?php the_permalink(); ?>" class="front__news--link">
                        <div class="front__news--img">
                        <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/noimage.png" alt="no-img"/>
                        <?php endif; ?>
                        </div>
                        <div>
                        <p class="front__news--ttl"><?php the_title(); ?></p>

                        <div class="front__news--cateblc">
                            <div class="front__news--cates">

                            <?php if (has_category()): ?>
                            <?php $postcat = get_the_category(); for($i = 0; count($postcat) > $i; $i++){
                            $postName = $postcat[$i]->name;
                            $postId = $postcat[$i]->slug;?>
                            <span class="cat-data cate-<?php echo $postId; ?>"><?php echo $postName; ?></span>

                        <?php } ?>
                        <?php endif; ?>
                            </div>
                            <p class="front__news--cateblc-date"><?php the_date(); ?></p>

                        </div>
                        <p class="front__news--exerpt"><?php echo get_the_excerpt(); ?> </p>

                    </div>
                    
                    </a>
                </li>
                <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>




                </ul>
                <?php

// 以下ページネーション 
$args = array(
    'current' => max(1, $page),
    'end_size' => 1,
    'mid_size' => 1,
    'type' => 'list',
    );
paginate_links($args);
?>

            </div>
            <!-- <p class="main__link--wrapper"><a href="/news/" target="_blank" class="main__link">More News<span></span></a></p> -->
        </div>    
    </div>

</div>


