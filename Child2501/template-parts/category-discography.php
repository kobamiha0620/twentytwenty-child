
<div id="streaming" class="streaming">
    <div class="streaming__inner">

        <div class="streaming__blc">

            <h2 class="streaming__ttl">streaming</h2>

            <div class="streaming__selectsp--wrapper">
                <div include="form-input-select()" class="streaming__selectsp">
                    <select name="discography" onchange="location.href=value;" id="streamingSelect">
                        <option value="/category/discography/" data-select="ALL">ALL</option>
                        <option value="/category/single/" data-select="SINGLE">SINGLE</option>
                        <option value="/category/album/" data-select="ALBUM">ALBUM</option>
                        <option value="/category/blueray/" data-select="Blueray&DVD">Blueray&DVD</option>
                        <option value="/category/streaming/" data-select="STREAMING">STREAMING</option>
                        <option value="/category/other/" data-select="OTHER">OTHER</option>
                    </select>
                </div>
            </div>

            <div class="streaming__selectpc">
                <a href="/category/discography/" class="select-discography">ALL</a>
                <a href="/category/single/" class="select-single">SINGLE</a>
                <a href="/category/album/" class="select-album">ALBUM</a>
                <a href="/category/blueray/" class="select-blueray">Blueray&DVD</a>
                <a href="/category/streaming/" class="select-streaming">STREAMING</a>
                <a href="/category/other/" class="select-other">OTHER</a>
            </div>

                <?php if(is_category('discography')){
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'discography', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }elseif(is_category('single')){
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'single', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }elseif(is_category('album')){
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'album', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }elseif(is_category('blueray')){
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'blueray', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }elseif(is_category('streaming')){
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'streaming', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }else{
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ
                        'category_name' => 'other', // カテゴリ名（スラッグ）
                    );
                    $new_query = new WP_Query($args);
                }
 
                 ?>



                <?php if ($new_query->have_posts()) : ?>
                    <ul class="streaming__lists">
                        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                            <?php 
                            // 投稿IDを指定
                                $post_id = get_the_ID();
                                // $select = get_field('select__discography' ,$post_id);
                                $date = get_field('date__discography', $post_id);
                                $link = get_field('url__discography', $post_id);
                                $track = get_field('list__discography', $post_id);
                                $id_to_url = get_permalink($post_id);
                            ?>

                            
                            <li>
                                <a href="<?php echo $id_to_url; ?>">
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="" >
                                <p class="streaming__name"><?php the_title(); ?></p>

                                <p class="streaming__date"><?php echo $date; ?> RELEASE</p>
                                <?php
                                        $categories = get_the_category();
                                        if ( $categories ) {
                                            echo '<p class="streaming__cate">';
                                            foreach ( $categories as $category ) {
                                                if($category -> slug !== 'discography'){
                                                    echo '<span>'.$category->name.'</span>';
                            
                                                }
                                            }
                                            echo '</p>';
                                        }
                                    
                                    
                                ?>
                                </a>
                            </li>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>

                <?php endif; ?>
                
        </div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/streaming.js"></script>


