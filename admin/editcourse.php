<?php
// Initialize the session
session_start();
if(!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true) {
  header("location: login.php");
}
require "../config.php";
$success_message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $course_id = "";

    if( isset($_POST["id"])) {
        $course_id  = $_POST["id"];
    }

    $sql = "";

    $course_title = $_POST["title"];
                $course_category = $_POST["category"];
                $course_url = $_POST["url"];
                $course_price = $_POST["price"];
                $course_image = $_POST["image"];

    if(!empty($course_id)) {
        $sql = "UPDATE courses SET title='$course_title', category='$course_category', price='$course_price', url='$course_url', image='$course_image' WHERE id='$course_id'";
    } else {
        $sql = "INSERT INTO courses (title, category, price,  url, image) VALUES ('$course_title', '$course_category', '$course_price','$course_url', '$course_image')";
    }
    if(mysqli_query($link, $sql)) {
        $success_message = "Course saved successfully";
    }
}

?>
<html lang="en">

<head>
  <?php include "./header.php" ?>
</head>

<body>
  <?php include "./navigation.php" ?>

  <main class="container" style="margin-top: 4em;">
    <?php
        $course_id = "";
        if(isset($_GET["id"])) {
            $course_id = $_GET["id"];
        }
        $course_title = $course_category = $course_url = $course_image = $course_price = "";
        if(!empty($course_id)) {
            $sql = "SELECT * FROM courses WHERE id='$course_id'";
            $result = mysqli_query($link, $sql);
            if($row = mysqli_fetch_assoc($result)) {
                $course_title = $row["title"];
                $course_category = $row["category"];
                $course_url = $row["url"];
                $course_image = $row["image"];
                $course_price = $row["price"];
            }
        }

    ?>
    <?php if($success_message) {?>
            <div class="alert alert-success" role="alert">
              <?php echo $success_message ?>
              <a href="courses.php">Go to Courses</a>
            </div>
            <?php } ?> 
    <form method="post" style="margin-top: 4em;">
  <div class="form-group">
    <label for="courseTitle">Course Title</label>
    <input type="text" name="title" value="<?php echo $course_title?>" class="form-control" id="courseTitle" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="courseCategory">Course Category</label>
    <input type="text" name="category" class="form-control" value="<?php echo $course_category?>" id="courseCategory" placeholder="Enter Category">
  </div>
  <div class="form-group">
    <label for="courseURL">Course URL</label>
    <input type="text" name="url" class="form-control" value="<?php echo $course_url?>" id="courseURL"  placeholder="Enter Course URL">
  </div>
  <div class="form-group">
    <label for="imagePath">Course Image Path</label>
    <input type="text" class="form-control" name="image" value="<?php echo $course_image?>" id="imagePath" placeholder="Enter Course Image Path">
  </div>
  <div class="form-group">
    <label for="imagePath">Course Price / Type</label>
    <input type="text" class="form-control" name="price" value="<?php echo $course_price?>" id="coursePrice" placeholder="Enter Course Price (Free / Premium)">
  </div>
  <?php if(isset($_GET["id"])) {
        echo "<input type='hidden' name='id' value='$course_id' />";
    }?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </main>
  <?php include "footer.php" ?>

  <!-- jQuery Plugins -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>

  
</body>

</html>