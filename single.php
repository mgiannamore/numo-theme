<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<body class="page--light no-x-scroll">
			<div class="nav-container nav-container--careers">
				<nav class="main-nav">
						<a href="/faqs">faqs</a>
						<a class="active" href="/careers">careers</a>
						<a href="/contact">contact</a>
						<a href="/newsletter">newsletter</a>
						<a class="back" href="/careers"></a>
				</nav>
			</div>
			<div class="top-logo top-logo--color top-logo--faq">
				<a href="/careers" class="logo-link"></a>
			</div>
			<div class="content-gradient content-gradient--top"></div>
			<div class="faq__pad">
				<div class="content content--single-career">
					<h1 class="inner-page__title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="content-gradient content-gradient--bottom"></div>
		</body>


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

<?php get_footer(); ?>
