<?php
// Initialize the session
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
}
$success_message = $error = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
  require "./config.php";

  $name = $_POST["name"];
  $feedback = $_POST["message"];
  $id = $_SESSION["id"];

  $sql = "UPDATE users SET name='$name', feedback='$feedback' WHERE id=$id";

  if(mysqli_query($link, $sql)) {
    $success_message = "Your feedback was submitted successfully";
  } else {
    $error = "Failed to save feedback";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<!-- Hero-area -->
<div class="hero-area section">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); "></div>
  <!-- /Backgound Image -->

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <ul class="hero-area-tree">
          <li><a href="main.html">Home</a></li>
          <li>Contact</li>
        </ul>
        <h1 class="white-text">Get In Touch</h1>

      </div>
    </div>
  </div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- contact form -->
      <div class="col-md-6">
        <div class="contact-form">
          <h4>Send a message</h4>
          <?php if($success_message) {?>
            <div class="alert alert-success" role="alert">
              <?php echo $success_message ?>
            </div>
            <?php } elseif($error) {?>
            <div class="alert alert-danger" role="alert">
              <?php echo $success_message ?>
            </div>
            <?php } ?> 
          <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <input class="input" type="text" name="name" placeholder="Name">
            <input class="input" type="email" name="email" placeholder="Email">
            <input class="input" type="text" name="subject" placeholder="Subject">
            <textarea class="input" name="message" placeholder="Enter your message"></textarea>
            <button class="main-button icon-button pull-right">Send Message</button>
            
          </form>
        </div>
      </div>
      <!-- /contact form -->

      <!-- contact information -->
      <div class="col-md-5 col-md-offset-1">
        <h4>Contact Information</h4>
        <ul class="contact-details">
          <li><i class="fa fa-envelope"></i>CareerAi@gmail.com</li>
          <li><i class="fa fa-phone"></i>+92-307-4503330</li>
          <li><i class="fa fa-map-marker"></i>IIUI Islamabad</li>
        </ul>

        <!-- contact map -->
        <iframe id="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13283.665953867676!2d73.0237518!3d33.6593257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b2f1c1c99b676ce!2sInternational%20Islamic%20University%20Islamabad%20(IIUI)!5e0!3m2!1sen!2s!4v1658763724730!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- /contact map -->

      </div>
      <!-- contact information -->

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</div>
<!-- /Contact -->


<!-- Footer -->
<footer id="footer" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- footer logo -->
      <div class="col-md-6">
        <div class="footer-logo">
          <a class="logo" style="font-size: 30px;" href="main.html">Career AI</a>
        </div>
      </div>
      <!-- footer logo -->


    </div>
    <!-- /row -->

    <!-- row -->
    <div id="bottom-footer" class="row">

      <!-- social -->
      <div class="col-md-4 col-md-push-8">

      </div>
      <!-- /social -->

      <!-- copyright -->
      <div class="col-md-8 col-md-pull-4">
        <div class="footer-copyright">
          <span>&copy; 2022 - AI Based Career Counseing System Team </span>
        </div>
      </div>
      <!-- /copyright -->

    </div>
    <!-- row -->

  </div>
  <!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'>
  <div class='preloader'></div>
</div>
<!-- /preloader -->


<!-- jQuery Plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="js/google-map.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>