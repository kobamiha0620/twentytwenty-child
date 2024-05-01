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

<!-- メンバー一覧ページ内容 -->

<?php 
    $select = $cat->cat_name;
    $date = get_field('date__discography');
    $link = get_field('url__discography');
    $track = get_field('list__discography');
?>

<section id="discography" class="discography">
    <div class="discography__blc">
        
        <div class="discography__img">
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="イメージ">
        </div>

        <div class="discography__txtblc">
            <!-- カテゴリー表示 -->

            

            <?php 

            $categories = get_the_category();
            if ( $categories ) {
                echo '<ul class="discography__cate">';
                foreach ( $categories as $category ) {
                    if($category -> slug !== 'discography'){
                        echo '<li><p>'.$category->name.'</p></li>';

                    }
                }
                echo '</ul>';
            }
            ?>

            
            <!-- <#?php
                if($select){
                    echo '<ul class="discography__cate">';
                    foreach($select as $child){
                        echo '<li><p>';
                        if(is_array($child)){
                            echo $child['label'];
                        }else{
                            echo $child;
                        }
                        echo '</p></li>';
                    }
                    echo '</ul>';
                }
                ?> -->

            <h3 class="discography__subttl"><?php the_title(); ?></h3>
            <p class="discography__date"><?php echo $date; ?> RELEASE</p>

            <?php if($link): ?>
            <div class="discography__streaming">
                <a href="<?php echo $link; ?>" target="_blank" rel="noreferrer" class="discography__streaming--btn"><span>STREAMING</span></a>
            </div>
            <?php endif ?>

            <?php if($track): ?>
                <div class="discography__tracklist">
                    <h4 class="discography__tracklist--ttl">TRACK LIST</h4>
                    <p class="discography__tracklist--txt"><?php echo $track; ?></p>
                </div>
            <?php endif ?>
        </div>
    </div>
    <p class="discography__back"><a href="/category/discography/">back to index</a></p>

    <?php if(!empty($post->post_content)): ?>
    <div class="discography__post">
        <div class="discography__post--inner">
		<?php the_content(); ?>
        </div>
	</div>
    <?php endif ?>

</section>


<?php get_footer(); ?>

