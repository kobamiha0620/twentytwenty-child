<!-- メンバー一覧ページ内容 -->
<?php 
 $custom_fields = get_post_custom();  
?>

<div id="profile" class="profile">
    <div class="profile__inner">
        <h2 class="main__fttl">profile</h2>

        <div class="profile__blc">
            <div class="profile__blc--img">
                <div class="profile__blc--imginner">
                <?php $image = get_field('member_img01'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="photo01" />
                <?php endif; ?>
                <?php $image = get_field('member_img02'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="photo02" class="photo02" />
                <?php endif; ?>
                </div>
            </div>
            <div class="profile__txtblc">
                <p class="profile__name"><?php  echo get_post_meta($post->ID , 'name_jp' ,true); ?></p>
                <p class="profile__name--en"><?php  echo get_post_meta($post->ID , 'name_en' ,true); ?></p>

                <div class="profile__personal--wrapper">
                <dl class="profile__personal">
                    <dt>血液型</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'blood' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>星座</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'seiza' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>身長</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'height' ,true); ?>cm</dd>
                </dl>
                <dl class="profile__personal">
                    <dt>生年月日</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'birthday' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>出身地</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'area' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>趣味</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'hobbey' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>特技</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'good' ,true); ?></dd>
                </dl>
                <dl class="profile__personal">
                    <dt>ひとこと</dt>
                    <dd><?php  echo get_post_meta($post->ID , 'oneword' ,true); ?></dd>
                </dl>
                </div>


                <ul class="profile__link">
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

                </ul>
            </div>
        </div>


    </div>
</div>