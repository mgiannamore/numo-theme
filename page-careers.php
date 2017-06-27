<?php
/**
 * Template Name: Careers Template
 */
 ?>
<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<body class="page--light no-x-scroll">
        <div class="nav-container nav-container--careers">
          <nav class="main-nav">
  		        <a href="/faqs">faqs</a>
  		        <a class="active" href="/careers">careers</a>
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
          <div class="content content--careers">
            <h1 class="inner-page__title"><?php the_title(); ?></h1>
            <?php
            $args = array(
            	'orderby'          => 'title',
            	'order'            => 'ASC',
            	'post_type'        => 'job_openings',
            	'post_status'      => 'publish'
            );
            $openings = get_posts( $args ); ?>
            <?php foreach ($openings as $opening): ?>
              <h2><?php echo $opening ->post_title; ?></h2>
              <p>
                <?php echo(get_field('short_description', $opening->ID)); ?>
                <br />
                <a href="<?php echo get_permalink($opening->ID); ?>">view full description</a>
              </p>
            <?php endforeach; ?>
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
