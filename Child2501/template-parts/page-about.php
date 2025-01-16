<!-- メンバー一覧ページ内容 -->
<?php $value = get_field( "about__text" ); ?>
<?php $value2 = get_field( "about__text2" ); ?>

<div id="about" class="about">
    <div class="about__inner">

        <div class="about__blc">

            <h2 class="about__ttl">About</h2>

            <p class="about__txt"><?php echo $value ?></p>

            <?php if( $value2 ): ?>

            <div class="about__box">
                <p class="about__box--txt"><?php echo $value2 ?></p>
            </div>

            <?php endif; ?>

        </div>


    </div>
</div>