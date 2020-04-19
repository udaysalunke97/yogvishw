<?php 
/**
* Template Name: Events; 
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
            <h1 class="mb-3"><?php the_title(); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url();?>">Home</a></span> <span><?php the_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?> 
<?php endif; ?>
    <section class="ftco-section">
      <div class="container">
      <div class="events-list">
      <div class='row'>
<?php 
$args = array( 'post_type' => 'events', 'posts_per_page' => 7 );
$event = new WP_Query( $args ); 
?>
<?php if ( $event->have_posts() ) : ?>
<?php while ( $event->have_posts() ) : $event->the_post(); ?>
<div class='col-12 event-box'>
<div class='d-flex'>
<div class='event-image'>
<?php the_post_thumbnail('full'); ?>
</div>
<div class='event-content'>
<h3><?php the_title(); ?></h3>
<lable><?php echo get_field('date'); ?> <span><?php echo get_field('start_time'); ?> - <?php echo get_field('end_time'); ?></span></lable>
<?php echo the_excerpt(); ?>
<div class='btn-links'>
<?php if( have_rows('forms_links') ): ?> 
<?php while( have_rows('forms_links') ): the_row();  ?>
<a class='btn btn-primary py-2 px-3' src='<?php echo get_sub_field('button_link'); ?>'>
<?php echo get_sub_field('button_text'); ?>
</a>
<?php endwhile;?>
<?php endif;?>
</div>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>