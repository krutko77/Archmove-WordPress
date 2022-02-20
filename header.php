<!DOCTYPE html>
<html lang="ru">

<head>
	<title><?php echo bloginfo( 'description' ); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"
   
<?php wp_head(); ?>

</head>

<body>
	<div class="wrapper">
      <header class="header" id="top">
         <div class="header__container">
            <div class="header__wrapper">
            <a class="header__logo-link" href="<?php echo bloginfo( 'url' ) ?>"><img class="header__logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo"></a>
               <button class="header__menu-icon"><span></span></button>
               <div class="header__menu menu">

               <?php 
                  wp_nav_menu( [
                     'theme_location'  => 'top_menu',
                     'container'       => 'nav',
                     'container_class' => 'menu__body',                        
                     'menu_class'      => 'menu__list',                                               
                  ] );
               ?>

                  <!-- <nav class="menu__body">
                     <ul class="menu__list">
                        <li class="menu__item"><a data-goto=".gallery" class="menu__link" href="">Design Gallery</a></li>
                        <li class="menu__item"><a data-goto=".partners" class="menu__link" href="">List of Architect</a></li>
                        <li class="menu__item"><a data-goto=".reviews" class="menu__link" href="">Articles</a></li>
                        <li class="menu__item"><a data-goto=".features" class="menu__link" href="">How it Works</a></li>
                     </ul>
                  </nav> -->

                  <div class="header__right-block">
                     <img class="header__img" src="<?php echo IMG_DIR; ?>/search-icon.svg" alt="search-icon">
                     <button class="header__button--sign-in">Sign In</button>
                     <button class="header__button--sign-up">Sign Up</button>
                  </div>
               </div>
            </div>
         </div>
      </header>