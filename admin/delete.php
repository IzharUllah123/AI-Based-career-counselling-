<?php
session_start();

if(!isset($_SESSION["adminloggedin"]) && !$_SESSION["adminloggedin"] === true){
    header("location: main.php");
    exit;
}

  $id = $_GET["id"];
  $type = $_GET["type"];

  if(empty($id)) {
    header("location:main.php");
    exit;
  }
  if(empty($type)) {
    $type = "users";
  } elseif ($type == "course") {
    $type = "courses";
  }
  require "../config.php";
  
  $sql = "DELETE FROM $type WHERE id='$id'";

  if(mysqli_query($link, $sql)) {
    // echo $sql;
    if($type == "courses") {
      header("location: courses.php");
    } else {
      header("location: main.php");
    }
  } else {
    echo '<h1><center>OOPs! Something went wrong</center></h1>';
  }
?>