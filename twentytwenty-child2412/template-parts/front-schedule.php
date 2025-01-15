<div class="front__schedule pinkbg">
    <div class="front__schedule--inner">
        <h2 class="main__subttl">SCHEDULE</h2>
        <div class="front__schedule--wrapper">
            <div class="front__schedule--blc">
           
     
            <?php echo eo_get_the_start( 'jS M Y' ); ?>

            <?php
            $events = eo_get_events(array(
                    'numberposts'=>10,
                    'event_start_after'=>'today',
                    'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
                ));
                $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
            if($events):
                echo ' <ul class="front__schedule--lists">';
                foreach ($events as $event):?>

                <?php 
                	// get raw date
                    $date = eo_get_schedule_start();
                    // make date object
                ?>
                    <li class="front__schedule--list">

                        <a href="<?php the_permalink($event->ID); ?>" class="front__schedule--link">
                            <!-- <div class="front__schedule--img">
                                < ?php if( has_post_thumbnail($event->ID) ): ?>
                                    < ?php echo do_shortcode(' [eo_events]%event_thumbnail% [/eo_events]'); ?>
                                < ?php else: ?>
                                    <img src="< ?php echo get_stylesheet_directory_uri(); ?>/assets/images/noimage_schedule.png" alt="no-img"/>
                                < ?php endif; ?>
                            </div> -->
                            <div>

                                <div class="front__schedule--cateblc">
                                <span class="front__schedule--badge">NEW</span>
                                <p class="front__schedule--cateblc-date"><?php echo eo_get_the_start( $format, $event->ID, $event->occurrence_id ); ?></p>


                
                                </div>
                                <!-- <p class="front__schedule--exerpt">< ?php echo get_the_excerpt($event->ID); ?> </p> -->
                                <p class="front__schedule--ttl"><?php echo get_the_title($event->ID); ?></p>

                            </div>           
                        </a>

                    </li>

                <?php endforeach;
                echo '</ul>';
            endif;?>


            </div>
            <p class="main__link--wrapper"><a href="/schedule/" target="_blank" class="main__link plusWhite">More SCHEDULE<span></span></a></p>
        </div>    
    </div>

</div>