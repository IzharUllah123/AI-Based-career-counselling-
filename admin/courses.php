<?php
// Initialize the session
session_start();
if(!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true) {
  header("location: login.php");
}
require "../config.php";
?>
<html lang="en">

<head>
  <?php include "./header.php" ?>

  <style>
  .feedback-cell {
    max-width: 200px;
  }
  </style>
</head>

<body>
  <?php include "./navigation.php" ?>

  <main class="container" style="margin-top: 4em;">
    <h1 class="text-center">Course List</h5>
    <a class="btn btn-success" href="editcourse.php" style="display: block; width: fit-content; margin-right: 0; margin-left: auto;">+ Add Course</a>
    <div class="table-responsive">
        <table class="table table-striped" style="margin-top: 2em;">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Price</th>
              <th>URL</th>
              <th>Thumbnail</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php 
          $sql = "SELECT * FROM courses";
          $result = mysqli_query($link, $sql);

          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              ?>
            <tr>
              <td><?php echo $row["id"]?></td>
              <td><?php echo $row["title"]?></td>
              <td><?php echo $row["category"]?></td>
              <td><?php echo $row["price"]?></td>
              <td><a href="<?php echo $row["url"]?>"><?php echo $row["url"]?></a></td>
              <td class="image-cell"><img src="<?php echo '../'.$row["image"]?>" class='img-responsive'  /></td>
              <td class="record-actions">
                <a class="btn btn-primary btn-block" href="editcourse.php?id=<?php echo $row["id"]?>">Edit</a>
                <a class="btn btn-danger btn-block" href="delete.php?type=course&id=<?php echo $row["id"]?>">Delete</a>
              </td>
            </tr>
            <?php
              }
            } 
            ?>
          </tbody>
        </table>
      </div>
      <a class="btn btn-success" href="editcourse.php" style="display: block; width: fit-content; margin-right: 0; margin-left: auto;">+ Add Course</a>
  </main>
  <!-- jQuery Plugins -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>

  <?php include "footer.php" ?>
</body>

</html>