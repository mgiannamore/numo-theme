<?php
/**
 * Template Name: Home Page Template
 */
 ?>
<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<body class="page--dark center-text no-scroll">
		    <nav class="main-nav main-nav--home">
		        <a href="/faqs">faqs</a>
		        <a href="/careers">careers</a>
		        <a href="/contact">contact</a>
		        <a href="/newsletter">newsletter</a>
		    </nav>
		    <div class="top-logo top-logo--trans"></div>
		    <div class="home__pad">
		        <div class="home__headline__container">
		            <h1 class="home__headline">numo</h1>
		            <div class="home__dot__container">
		                <div class="home__dot"></div>
		            </div>
		        </div>
		        <div class="home__copy__container">
		            <div class="slide-mover">
		                <div id="copyslide1" class="home__copyslide home__copyslide--active">
		                    <p class="home__copy h-center">
		                        numo is a financial services technology incubator based in pittsburgh. we are a team of technologists and academics that create world class software products.
		                    </p>
		                    <a href="#" id="explore-numo" class="btn btn--white">Explore numo</a>
		                </div>
		                <div id="copyslide2" class="home__copyslide home__copyslide--inactive">
		                    <p class="home__copy h-center">
		                        our model is unique. to learn more about what we are, and what we’re not please see our faq.
		                    </p>
		                    <a href="#" class="btn btn--white">View faqs</a>
		                </div>
		                <div id="copyslide3" class="home__copyslide home__copyslide--inactive">
		                    <p class="home__copy h-center">
		                        we are currently hiring talented and passionate technologists, designers, and product managers. if that's you we'd love to talk
		                    </p>
		                    <a href="#" class="btn btn--white">View careers</a>
		                </div>
		                <div id="copyslide4" class="home__copyslide home__copyslide--inactive">
		                    <p class="home__copy h-center">
		                        we're always up to something. join our mailing list to keep up with the latest at numo.
		                    </p>
		                    <a href="#" class="btn btn--white">Sign up</a>
		                </div>
		            </div>
		        </div>
		    </div>
		    <a href="#" id="animate-dot" class="home__down-arrow"></a>
		    <script type="text/javascript" src="/wp-content/themes/numo-wp/js/home.js"></script>
		</body>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

<?php get_footer(); ?>
