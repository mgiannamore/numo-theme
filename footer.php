<?php if(!(is_page('home')) && !(is_page('newsletter'))): ?>
<footer class="sign-up">
  <div class="footer-wrap">
    <div class="footer-left">
      <div class="footer-left__top">
        we're always up to something.
      </div>
      <div class="footer-left__bottom">
        joino our mailing list to keep up with the latest at numo.
      </div>
    </div>
    <div class="footer-right">
      <a class="btn btn--orange" href="/newsletter">sign up</a>
    </div>
  </div>
</footer>
<? endif; ?>
<?php wp_footer(); ?>


</html>
