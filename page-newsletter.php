<?php
/**
 * Template Name: Newsletter Page Template
 */
 ?>
<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<body class="page--light no-scroll">
        <div class="nav-container nav-container--newsletter">
          <nav class="main-nav">
  		        <a href="/faqs">faqs</a>
  		        <a href="/careers">careers</a>
  		        <a href="/contact">contact</a>
  		        <a class="active" href="/newsletter">newsletter</a>
              <a class="back" href="/"></a>
  		    </nav>
        </div>
		    <div class="top-logo top-logo--color top-logo--faq">
		      <a href="/" class="logo-link"></a>
		    </div>
        <div class="faq__pad">
          <div class="content content--newsletter">
            <h1 class="inner-page__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <form class="newsletter-form">
              <label class="srt">email address</label>
              <input type="email" placeholder="email" />
              <input type="submit" class="btn btn--orange" value="submit"/>
            </form>
          </div>
        </div>
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
