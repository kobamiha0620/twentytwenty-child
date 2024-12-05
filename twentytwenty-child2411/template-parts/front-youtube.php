<div class="front__youtube">
    <h2 class="main__subttl">MOVIE</h2>

    <ul class="front__youtube--blclist">
        

        <?php 
            for($i = 0; $i < 8 ; $i++){

                if( get_field('youtube0'.$i) ){
                    echo '<li><div class="front__youtube--blc" >';
                    echo get_field('youtube0'. $i);
                    echo '</div></li>';
                }

            }
  
        ?>

    </ul>

    <p class="main__link--wrapper"><a href="https://www.youtube.com/channel/UCoR4zZDvWvUIqgEWz4HS-sA" target="_blank" class="main__link">Youtube OFFICIAL <span></span></a></p>
</div>

