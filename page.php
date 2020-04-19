<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="hero-wrap js-fullheight" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3"><?php the_title(); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url();?>">Home</a></span> <span><?php wp_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
            <?php the_content(); ?>
</div>
</section>
<?php endwhile; ?> 
<?php endif; ?>
<?php get_footer(); ?>
