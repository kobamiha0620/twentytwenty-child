<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">
<!-- メンバー一覧ページ内容 -->
<?php 
 $custom_fields = get_post_custom();  
?>

<div id="profile" class="profile">
    <div class="profile__inner">
        <h2 class="main__fttl">profile</h2>

        <div class="profile__blc">
            <div class="profile__blc--img">
                    <div class="profileSwiper">
                        <div class="swiper-wrapper">
                            <?php $image = get_field('member_img01'); if( !empty($image) ): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image['url']; ?>" alt="photo02" />
                                </div>

                            <?php endif; ?>
                            <?php $image = get_field('member_img02'); if( !empty($image) ): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image['url']; ?>" alt="photo02" />
                                </div>

                            <?php endif; ?>

                        </div>
                        <div class="swiper-pagination swiper-button-pink"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
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
                    <?php
                    $custom_fields = get_post_meta( $post->ID , 'showroom' , true );
                    if(empty( $custom_fields ) === false){ ?>
                        <li>
                            <a href="<?php  echo get_post_meta($post->ID , 'showroom' ,true); ?>" target="_blank" class="sns_showroom"></a>
                        </li>
                    <?php } ?>  

                </ul>
            </div>
        </div>


    </div>
</div>


</main><!-- #site-content -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/sw.js"></script>

<?php get_footer(); ?>
