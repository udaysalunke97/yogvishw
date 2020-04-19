<?php 
/**
* Template Name: Enrollment 
*
*/ ?>
<?php
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
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url();?>">Home</a></span> <span><?php wp_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>
    <section class="ftco-section">
      <div class="container">
      <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required="">
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
  </div>
  <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label>Address</label>
    <textarea class="form-control" name="address" placeholder="Address"></textarea>
  </div>
  <div class="form-group">
    <label>Contact number</label>
    <input type="text" class="form-control" name="cnumber" placeholder="Contact number" required="">
  </div>
  <div class="form-group">
    <div class="row">
        <div class="col-md-4">
            <label>Occupation</label>
            <input type="text" class="form-control" name="occupation" placeholder="Occupation">
        </div>
        <div class="col-md-4">
            <label>Name of Organization</label>
            <input type="text" class="form-control" name="organization" placeholder="Name of Organization">
        </div>
        <div class="col-md-4">
            <label>Designation</label>
            <input type="text" class="form-control" name="designation" placeholder="Designation">
        </div>
    </div>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <label>Medical history/problems</label>
    <input type="text" class="form-control" name="problem" placeholder="Medical history/problems">
  </div>
  <div class="form-group">
    <label>Goals in particular</label>
    <textarea class="form-control" name="goal" placeholder="Goals in particular"></textarea>
  </div>
  <div class="form-group">
    <label>Preferred batch</label>
    <input type="text" class="form-control" name="batch" placeholder="Preferred batch">
  </div>
  <input type="submit" class="btn btn-primary" value='submit' name="submit" />
</form>
<?php
if(isset($_POST['submit'])) {
  $n=$_POST['name'];
  $c=$_POST['class'];
  $m=$_POST['mark'];
  global $wpdb;
  $sql=$wpdb->insert("wp_dummy",array("name"=>$n,"class"=>$c,"marks"=>$m));
  if($sql) {
    echo '1';
  } else {
    echo '2';
  }
}
?>
</div>
</section>
<?php get_footer(); ?>