<section class="ftco-section ftco-insta">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-12 heading-section text-center">
<h2 class="mb-1">Instagram</h2>
</div>
</div>
</div>
<?php echo do_shortcode('[instagram-feed]'); ?>
</section>
<footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
            <?php dynamic_sidebar('footer1'); ?>
        </div>
        <div class="footer-bottom row align-items-center">
          <p class="footer-text m-0 col-lg-6 col-md-12">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            2020 All rights reserved | Designed & developed by UD creation
          </p>
          <div class="col-lg-6 col-sm-12 footer-social">
            <a href="#"><i class="icon-facebook"></i></a>
            <a href="#"><i class="icon-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>

</html>