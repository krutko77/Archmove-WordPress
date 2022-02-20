      <footer class="footer">
         <div class="container">
            <div class="footer__wrapper">

            <?php 
               wp_nav_menu( [
                  'theme_location'  => 'bottom_menu',
                  'container'       => 'nav',
                  'container_class' => 'footer__menu',                        
                  'menu_class'      => 'menu__list',                                                
               ] );
            ?>
               <!-- <nav class="footer__menu menu">
                  <ul class="menu__list">
                     <li class="menu__item"><a data-goto=".about" class="menu__link" href="#">About Us</a></li>
                     <li class="menu__item"><a data-goto=".features" class="menu__link" href="#">How it Works</a></li>
                     <li class="menu__item"><a data-goto=".reviews" class="menu__link" href="#">FAQ</a></li>
                     <li class="menu__item"><a data-goto=".features" class="menu__link" href="#">Contact Us</a></li>
                     <li class="menu__item"><a data-goto=".about" class="menu__link" href="#">Privacy Policy</a></li>
                  </ul>
               </nav> -->
               <a class="footer__logo-link" href="#top"><img class="footer__logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo"></a>
               <a class="go-top" href="#top"><img class="go-top-icon" src="<?php echo IMG_DIR; ?>/go-top-icon.png" alt="go-top-icon"></a>                  
            </div>
         </div>
      </footer>
	</div>

   <? wp_footer(); ?>
	
</body>

</html>


