<?php 
/**
* Template Name: Home 
*
*/
get_header();
?>
<div class='banner-slider'>
<?php if( have_rows('banner_slider') ): ?> 
<?php while( have_rows('banner_slider') ): the_row();  ?>
<div class='hero-wrap banner-slide' style='background-image: url(<?php echo get_sub_field('banner_image'); ?>);'>
<div class='slider-text'>
<h1 class="typewrite mb-3">
<span class="wrap"><?php echo get_sub_field('heading'); ?></span>
</h1>
<h2><?php echo get_sub_field('sub_heading'); ?></h2>
</div>
</div>
<?php endwhile; ?> 
<?php endif; ?>
</div>
<?php if( have_rows('content_box') ): ?> 
<?php while( have_rows('content_box') ): the_row();  ?>
<section class="ftco-section ftco-intro" style="background-image: url(<?php echo get_sub_field('image'); ?>);">
<div class="container">
<div class="row justify-content-end">
<div class="col-md-6">
<div class="heading-section">
<h2 class="mb-4"><?php echo get_sub_field('heading'); ?></h2>
</div>
<?php echo get_sub_field('content'); ?>
</div>
</div>
</div>
</section>
<?php endwhile; ?> 
<?php endif; ?>
<?php if( have_rows('offerings') ): ?> 
<?php while( have_rows('offerings') ): the_row();  ?>
<section class="ftco-section ftco-section-services bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-12 heading-section text-center">
<h2 class="mb-1"><?php echo get_sub_field('heading'); ?></h2>
</div>
</div>
<div class="row">
<?php if( have_rows('offerings_list') ): ?> 
<?php while( have_rows('offerings_list') ): the_row();  ?>
<div class="col-md">
<div class="services">
<div class="icon d-flex justify-content-center align-items-center">
<img src="<?php echo get_sub_field('image'); ?>" />
</div>
<div class="text mt-4">
<h3><?php echo get_sub_field('heading'); ?></h3>
<?php echo get_sub_field('content'); ?>
</div>
</div>
</div>
<?php endwhile; ?> 
<?php endif; ?>
</div>
</div>
</section>
<?php endwhile; ?> 
<?php endif; ?>
<?php if( have_rows('testimonial') ): while( have_rows('testimonial') ): the_row();  ?>
<section class="ftco-section testimony-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center">
<h2 class="mb-1"><?php echo get_sub_field('heading'); ?></h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
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
</div>
</div>
</div>
</section>
<?php endwhile; ?> 
<?php endif; ?>
<section class="ftco-gallery ftco-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center">
<h2 class="mb-1">Gallery</h2>
</div>
</div>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?> 
<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>