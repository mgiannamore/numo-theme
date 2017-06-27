<?php
/**
 * Template Name: FAQ Page Template
 */
 ?>
<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<body class="page--light no-x-scroll">
        <div class="nav-container nav-container--faq">
          <a href="#" class="nav-toggle"></a>
          <nav class="main-nav">
  		        <a class="active" href="/faqs">faqs</a>
  		        <a href="/careers">careers</a>
  		        <a href="/contact">contact</a>
  		        <a href="/newsletter">newsletter</a>
              <a class="back" href="/"></a>
  		    </nav>
        </div>
		    <div class="top-logo top-logo--color top-logo--faq">
		      <a href="/" class="logo-link"></a>
		    </div>
        <div class="content-gradient content-gradient--top"></div>
        <div class="faq__pad">
          <div class="content">
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

				<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

<?php get_footer(); ?>
