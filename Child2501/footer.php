		<footer id="site-footer" class="header-footer-group">
			<div class="footer">
				<div class="footer__inner">
					<div class="footer__inner--bnr">
						<a href="https://takanekofc.com/" target="_blank" rel="noopenner noreferrer">
							<img src="http://takanenonadeshiko.jp/wp-content/uploads/2022/11/bnr_fan.jpg" alt=""
								style="border: solid 1px #eee;">
						</a>
						<a href="https://www.youtube.com/channel/UCoR4zZDvWvUIqgEWz4HS-sA" target="_blank"
							rel="noopenner noreferrer">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner_youtube02.jpg" alt="">
						</a>
						<a href="https://takanenonadeshiko-ec.com/" target="_blank" rel="noopenner noreferrer">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner_shop02.jpg" alt="">
						</a>
					</div>



					<div class="footer__inquiery">
						<a href="/inquiery/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bnr_conatct.png" alt="お問い合わせ">
						</a>
					</div>
					<div class="l-footer__sns">
						<?php get_template_part( 'template-parts/snslist' ); ?>
					</div>
				</div>


				<div class="footer__btm--wrapper">
					<p class="footer__policy"><a href="/privacypolicy/">プライバシーポリシー</a></p>
					<p class="footer__copyright">&copy; INCS・TP</p>
				</div>
			</div>

		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>




		</body>

		</html>