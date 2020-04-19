<?php 
/**
* Template Name: Trial 
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
    <label>Date of Birth</label>
    <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" name="location" placeholder="Location">
  </div>
  <div class="form-group">
    <label>Contact number</label>
    <input type="text" class="form-control" name="cnumber" placeholder="Contact number" required="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <label>Previous experience of any physical activity</label>
    <input type="text" class="form-control" name="experience" placeholder="Previous experience of any physical activity">
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Where</label>
        <input type="text" class="form-control" name="where" placeholder="Where">
      </div>
      <div class="col-md-6">
        <label>When</label>
        <input type="text" class="form-control" name="when" placeholder="When">
      </div>
    </div>
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
    <label>How did you first hear about Yogvishwa?</label>
    <input type="text" class="form-control" name="abotyogvishw" placeholder="How did you first hear about Yogvishwa?">
  </div>
  <input type="submit" class="btn btn-primary" value='submit' name="submit" />
</form>
<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $location = $_POST['location'];
  $cnumber = $_POST['cnumber'];
  $email = $_POST['email'];
  $experience = $_POST['experience'];
  $where = $_POST['where'];
  $when = $_POST['when'];
  $problem = $_POST['problem'];
  $goal = $_POST['goal'];
  $abotyogvishw = $_POST['abotyogvishw'];
  global $wpdb;
  $sql=$wpdb->insert("wp_trial",
    array(
      "name"=>$n,
      "dob"=>$dob,
      "location"=>$location,
      "cnumber"=>$cnumber,
      "email"=>$email,
      "experience"=>$experience,
      "Where"=>$where,
      "When"=>$when,
      "problem"=>$problem,
      "goal"=>$goal,
      "Abot yogvishw"=>$abotyogvishw
    )
  );
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