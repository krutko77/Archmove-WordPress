<?php get_header(); ?>
	<main class="page">
			<section class="about" id="about">
				<div class="container">
					<h1 class="about__title"><?php the_field('about__title'); ?> <span><?php the_field('span'); ?></span></h1>
					<div class="about__content">
						<div class="about__description">
							<p class="about__text"><?php the_field('about__text'); ?></p>
							<a class="about__btn btn" href="#">Free Consultation</a>
						</div>
						<div class="about__img-wrap"><img class="about__img" src="<?php the_field('about__img'); ?>" alt="img"></div>
					</div>
				</div>
			</section>
			<section class="gallery" id="gallery">
				<div class="container">
					<h2 class="gallery__title title"><?php the_field('gallery__title'); ?></h2>
					<div class="gallery__wrap popup-gallery">
						<a class="gallery__item big-img1" href="<?php the_field('big-img1'); ?>"><img class="gallery__item-img img1" src="<?php the_field('img1'); ?>" alt="photo"></a>
						<a class="gallery__item big-img2" href="<?php the_field('big-img2'); ?>"><img class="gallery__item-img img2" src="<?php the_field('img2'); ?>" alt="photo"></a>
						<a class="gallery__item big-img3" href="<?php the_field('big-img3'); ?>"><img class="gallery__item-img img3" src="<?php the_field('img3'); ?>" alt="photo"></a>
						<a class="gallery__item big-img4" href="<?php the_field('big-img4'); ?>"><img class="gallery__item-img img4" src="<?php the_field('img4'); ?>" alt="photo"></a>
						<a class="gallery__item big-img5" href="<?php the_field('big-img5'); ?>"><img class="gallery__item-img img5" src="<?php the_field('img5'); ?>" alt="photo"></a>
						<a class="gallery__item big-img6" href="<?php the_field('big-img6'); ?>"><img class="gallery__item-img img6" src="<?php the_field('img6'); ?>" alt="photo"></a>
					</div>
				</div>
			</section>
			<section class="features" id="features">
				<div class="container">
					<h2 class="features__title title"><?php the_field('features__title'); ?></h2>
					<div class="features__content">
						<div class="features__img-wrap">
							<img class="features__img" src="<?php the_field('features__img'); ?>" alt="photo">
						</div>
						<div class="features__text-block">
							<div class="features__text-box features__text-box--first">
								<h3 class="features__subtitle"><?php the_field('subtitle-1'); ?></h3>
								<p class="features__text"><?php the_field('text-1'); ?></p>
							</div>
							<div class="features__text-box features__text-box--second">
								<h3 class="features__subtitle"><?php the_field('subtitle-2'); ?></h3>
								<p class="features__text"><?php the_field('text-2'); ?></p>
							</div>
							<div class="features__text-box features__text-box--last">
								<h3 class="features__subtitle"><?php the_field('subtitle-3'); ?></h3>
								<p class="features__text"><?php the_field('text-3'); ?></p>
							</div>
							<a class="features__btn btn" href="#">Consultation</a>
						</div>
					</div>
				</div>
			</section>
			<section class="reviews" id="reviews">
				<div class="container">
					<h2 class="reviews__title title">Sound Too Good To Be True?</h2>
					<div class="reviews__top">
						<div class="reviews__top-inner">
							<div class="reviews__slider slider">
								<article class="slider__item">
									<p class="slider__item-text">We just wanted to thank you for this fantastic website! We are so
										grateful for being able to advertise our Petite cabin and receive feedback from people from
										all over the U.S. and even further.</p>
									<address class="slider__item-author"><strong>Adam Morph</strong> — CEO A lfatech</address>
								</article>
								<article class="slider__item">
									<p class="slider__item-text">We just wanted to thank you for this fantastic website! We are so
										grateful for being able to advertise our Petite cabin and receive feedback from people from
										all over the U.S. and even further.</p>
									<address class="slider__item-author"><strong>Adam Morph</strong> — CEO A lfatech</address>
								</article>
								<article class="slider__item">
									<p class="slider__item-text">We just wanted to thank you for this fantastic website! We are so
										grateful for being able to advertise our Petite cabin and receive feedback from people from
										all over the U.S. and even further.</p>
									<address class="slider__item-author"><strong>Adam Morph</strong> — CEO A lfatech</address>
								</article>
							</div>
						</div>
					</div>
					<div class="reviews__bottom">
						<div class="reviews__img-wrap">
							<img class="reviews__img" src="<?php echo IMG_DIR; ?>/reviews-img.png" alt="dream-house">
						</div>
						<div class="reviews__slogan-block">
							<div class="reviews__slogan">Realize your dream project with <spa class="reviews__slogan--color">Archmove</spa>
							</div>
							<a class="reviews__btn btn" href="#">Free Consultation</a>
						</div>
					</div>
				</div>
			</section>
			<section class="partners" id="partners">
				<div class="container">
					<h2 class="partners__title title">Our Partners</h2>
					<div class="partners__wrap">
						<div class="partners__item partners__item-1"><img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-1.svg" alt="logo">
						</div>
						<div class="partners__item partners__item-2"><img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-2.svg" alt="logo">
						</div>
						<div class="partners__item partners__item-3"><img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-3.svg" alt="logo">
						</div>
						<div class="partners__item partners__item-4"><img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-4.svg" alt="logo">
						</div>
						<div class="partners__item partners__item-5"><img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-5.svg" alt="logo">
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>