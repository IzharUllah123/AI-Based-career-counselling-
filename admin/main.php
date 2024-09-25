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
    <h1 class="text-center">Users List</h5>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Name</th>
              <th>Feedback</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php 
          $sql = "SELECT * FROM users WHERE role='user'";
          $result = mysqli_query($link, $sql);

          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              ?>
            <tr>
              <td><?php echo $row["id"]?></td>
              <td><?php echo $row["username"]?></td>
              <td><?php echo $row["name"]?></td>
              <td class="feedback-cell"><?php echo $row["feedback"]?></td>
              <td class="record-actions">
                <a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"]?>">Delete</a>
              </td>
            </tr>
            <?php
              }
            } 
            ?>
          </tbody>
        </table>
      </div>
  </main>

  <?php include "footer.php" ?>
  <!-- jQuery Plugins -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>

 
</body>

</html>