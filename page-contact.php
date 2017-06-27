<?php
/**
 * Template Name: Contact Page= Template
 */
 ?>
<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<body class="page--light no-x-scroll">
        <div class="nav-container nav-container--contact">
          <nav class="main-nav">
  		        <a href="/faqs">faqs</a>
  		        <a href="/careers">careers</a>
  		        <a class="active" href="/contact">contact</a>
  		        <a href="/newsletter">newsletter</a>
              <a class="back" href="/"></a>
  		    </nav>
        </div>
		    <div class="top-logo top-logo--color top-logo--faq">
		      <a href="/" class="logo-link"></a>
		    </div>
        <div class="content-gradient content-gradient--top"></div>
        <div class="faq__pad">
          <div class="content content--contact">
            <h1 class="inner-page__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <form class="contact-form">
              <div class="contact-form__top-row">
                <label class="srt">name</label>
                <input type="text" placeholder="name"/>
                <label class="srt">email</label>
                <input type="email" placeholder="email"/>
              </div>
              <label class="srt">message</label>
              <input type='textarea' placeholder="message"/>
              <label class="srt">submit</label>
              <input type="submit" class="btn btn--orange" value="submit" />
            </form>
            <hr />
            <div class="contact-info">
              <div class="contact-info__block">
                <div class="contact-type">
                  phone
                </div>
                <div class="info">
                  412-867-5309
                </div>
              </div>
              <div class="contact-info__block">
                <div class="contact-type">
                  email
                </div>
                <div class="info">
                  <a href="mailto:sayhello@numo.com" class="plain-link">sayhello@numo.com</a>
                </div>
              </div>
              <div class="contact-info__block">
                <div class="contact-type">
                  address
                </div>
                <div class="info">
                  186 bakery square blvd.
                  <br />
                  pittsburgh, pa, 15206
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-gradient content-gradient--bottom"></div>
        <a class="contact-map" target="_blank"  href="https://www.google.com/maps/place/186+Bakery+Square+Blvd,+Pittsburgh,+PA+15206/@40.4570208,-79.9180738,17z/data=!3m1!4b1!4m5!3m4!1s0x8834edf4d33775a7:0x95e3bc88295659b9!8m2!3d40.4570167!4d-79.9158851"></a>
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
