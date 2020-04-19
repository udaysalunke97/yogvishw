<?php 
/**
* Template Name: Testimonia; 
*
*/
get_header();
?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="hero-wrap js-fullheight" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread"><?php the_title(); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url();?>">Home</a></span> <span><?php the_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?> 
<?php endif; ?>
    <section class="ftco-section">
      <div class="container">
      <div class="testimonial-slider">
<?php 
$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 7 );
$testimonial = new WP_Query( $args ); 
?>
<?php if ( $testimonial->have_posts() ) : ?>
<?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
<div class="testimony-wrap p-4 pb-5">
<div class="text">
<div class="line pl-5">
<div class="mb-4 pb-1">
<?php the_content(); ?>
</div>
<span
class="quote d-flex align-items-center justify-content-center"
>
<i class="icon-quote-left"></i>
</span>
</div>
<div class="d-flex align-items-center">
<div
class="user-img"
style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
></div>
<div class="ml-4">
<p class="name"><?php the_title(); ?></p>
<span class="position">Customer</span>
</div>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
</div>
</section>

<?php get_footer(); ?>