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
		<header class="header">
			<div class="header__container">
				<div class="header__wrapper">
					<a class="header__logo-link" href="<?php echo bloginfo( 'url' ) ?>"><img class="header__logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo"></a>
					<button class="header__icon-menu"><span></span></button>
					<div class="header__menu">
						<nav class="header__nav nav">
							<ul class="nav__list">
								<li class="nav__item"><a class="nav__link" href="#gallery">Design Gallery</a></li>
								<li class="nav__item"><a class="nav__link" href="#features">List of Architect</a></li>
								<li class="nav__item"><a class="nav__link" href="">Articles</a></li>
								<li class="nav__item"><a class="nav__link" href="">How it Works</a></li>
							</ul>
						</nav>
						<div class="header__right-block">
							<img class="header__img" src="<?php echo IMG_DIR; ?>/search-icon.svg" alt="search-icon">
							<button class="header__button--sign-in">Sign In</button>
							<button class="header__button--sign-up">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</header>