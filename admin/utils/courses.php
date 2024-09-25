<?php

$string = file_get_contents("./courses.json");
if ($string === false) {
    // deal with error...
}

$courses = json_decode($string, true);
if ($courses === null) {
    // deal with error...
    
}
require_once "../../config.php";

foreach ($courses as $course) {
    $title = $course["title"];
    $cat = $course["category"];
    $price = $course["price"];
    $url = $course["url"];
    $image = $course["image"];
    $image = "./".explode("career/", $image)[1];
    $sql = "INSERT INTO courses (title, category, price, url, image) VALUES ('$title','$cat','$price','$url', '$image')";

    mysqli_query($link, $sql);

}

echo "Records generated";
?>