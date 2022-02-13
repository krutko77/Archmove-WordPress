<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
            <?php 
                     wp_nav_menu( [
                        'theme_location'  => 'bottom_menu',
                        'container'       => 'nav',
                        'container_class' => 'footer__nav',                        
                        'menu_class'      => 'nav__list',                                                
                     ] );
                  ?>
					<!-- <nav class="footer__nav nav">
						<ul class="nav__list">
							<li class="nav__item"><a class="nav__link" href="#about">About Us</a></li>
							<li class="nav__item"><a class="nav__link" href="#partners">How it Works</a></li>
							<li class="nav__item"><a class="nav__link" href="#features">FAQ</a></li>
							<li class="nav__item"><a class="nav__link" href="#reviews">Contact Us</a></li>
							<li class="nav__item"><a class="nav__link" href="">Privacy Policy</a></li>
						</ul>
					</nav> -->
					<a class="footer__logo-link" href="<?php echo home_url(); ?>"><img class="footer__logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo"></a>
				</div>
			</div>
		</footer>
	</div>

   <? wp_footer(); ?>
	
</body>

</html>