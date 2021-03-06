<footer class="Footer">
  <div class="Footer-nav">
    <div class="Footer-column">
      <h5>Adres</h5>
      <ul class="Footer-list">
        <li>
          <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-phone"></use></svg>
          <span><a href="tel:0717600276">071 - 76 00 276</a></span>
        </li>
        <li>
          <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-print"></use></svg>
          <span>071 - 76 00 277</span>
        </li>
        <li>
          <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-office"></use></svg>
          <address>Narmstraat 3<br>2312 BC Leiden</address>
        </li>
      </ul>
    </div>
    <div class="Footer-column">
      <h5>Sitemap</h5>
      <?php include 'includes/sitemap.php'; ?>
    </div>
    <div class="Footer-column">
      <h5>Social</h5>
      <a target="_blank" href="https://nl-nl.facebook.com/pages/Stoer-Advocatuur-Leiden/218296298204898" class="u-hideUnderline Footer-social">
        <svg class="Icon Icon--alone Icon--facebook" viewBox="0 0 128 128"><use xlink:href="#icon-facebook2"></use></svg>
      </a>
      <a target="_blank" href="https://twitter.com/TogaTweets" class="u-hideUnderline Footer-social">
        <svg class="Icon Icon--alone Icon--twitter" viewBox="0 0 128 128"><use xlink:href="#icon-twitter2"></use></svg>
      </a>
      <a target="_blank" href="http://nl.linkedin.com/pub/esther-van-de-laak/12/96/ba0" class="u-hideUnderline Footer-social">
        <svg class="Icon Icon--alone Icon--linkedin" viewBox="0 0 128 128"><use xlink:href="#icon-linkedin"></use></svg>
      </a>
      <a href="/app" class="u-hideUnderline Footer-social">
        <svg class="Icon Icon--alone Icon--qrcode" viewBox="0 0 128 128"><use xlink:href="#icon-qrcode"></use></svg>
      </a>
    </div>
  </div>
  <!-- Copyright info -->
  <div class="Footer-legal">
    <div class="u-gridContainer">
        <div class="u-textCenter">
          <ul class="Footer-list Footer-list--inline">
            <li><a href="/privacy">Privacy</a></li>
            <li><a href="/algemene-voorwaarden">Algemene voorwaarden</a></li>
            <li><a href="/disclaimer">Disclaimer</a></li>
            <li>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?></li>
            <li>Built by <a href="http://www.lokaalgevonden.nl">Lokaalgevonden</a></li>
          </ul>
        </div>
      </div>
  </div>
</footer>
  
  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

  <!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

  <!-- Wordpress footer -->
  <?php wp_footer(); ?>
  </body>
</html>
