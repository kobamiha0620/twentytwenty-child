<!-- メンバー一覧ページ内容 -->


<div id="members" class="members">
    <div class="members__inner">
        <h2 class="main__fttl">MEMBERS</h2>

        <ul class="members__list">
        <?php 
            $custom_fields = get_post_custom();  
        ?>
        <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'category_name' => 'cast', // カテゴリをスラッグで指定する場合
                'posts_per_page' => 30 ,// 表示件数の指定

            ));
            global $post;
            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
            
            <!-- ループはじめ -->
            <li>
                 <a href="<?php the_permalink() ?>">
                    <?php $image = get_field('member_img01'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="メイン写真" />
                    <?php endif; ?>
                </a>
                <div class="members__profile">
                    <div>
                        <p class="members__name"><?php  echo get_post_meta($post->ID , 'name_jp' ,true); ?></p>
                        <p class="members__name--en"><?php  echo get_post_meta($post->ID , 'name_en' ,true); ?></p>
                    </div>

                    <ul class="members__link">

                    <?php
                    $custom_fields = get_post_meta( $post->ID , 'member_twitter' , true );
                    if(empty( $custom_fields ) === false){ ?>
                        <li>
                            <a href="<?php  echo get_post_meta($post->ID , 'member_twitter' ,true); ?>" target="_blank" class="sns_twitter"></a>
                        </li>
                    <?php } ?>  
                    
                    <?php
                    $custom_fields = get_post_meta( $post->ID , 'member_instagram' , true );
                    if(empty( $custom_fields ) === false){ ?>
                        <li>
                            <a href="<?php  echo get_post_meta($post->ID , 'member_instagram' ,true); ?>" target="_blank" class="sns_insta"></a>
                        </li>
                    <?php } ?>  
                    <?php
                    $custom_fields = get_post_meta( $post->ID , 'member_tiktok' , true );
                    if(empty( $custom_fields ) === false){ ?>
                        <li>
                            <a href="<?php  echo get_post_meta($post->ID , 'member_tiktok' ,true); ?>" target="_blank" class="sns_tiktok"></a>
                        </li>
                    <?php } ?>  
                    <?php
                    $custom_fields = get_post_meta( $post->ID , 'showroom' , true );
                    if(empty( $custom_fields ) === false){ ?>
                        <li>
                            <a href="<?php  echo get_post_meta($post->ID , 'showroom' ,true); ?>" target="_blank" class="sns_showroom"></a>
                        </li>
                    <?php } ?>  
                    </ul>
                </div>
            </li>

            <!-- ループおわり -->
            
            <?php endforeach; endif; wp_reset_postdata(); ?>



        </ul>
    </div>
</div>