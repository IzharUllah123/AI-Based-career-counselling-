<?php 
require_once "../../config.php";

for($i = 0; $i < 50; $i++) {
    $username = "user$i";
    $password = password_hash("password", PASSWORD_DEFAULT);
    $feedback = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $name = "User $i";
    $sql = "INSERT INTO users (username, name, password, feedback, role) VALUES ('$username', '$name' ,'$password', '$feedback',  'user')";

    mysqli_query($link, $sql);

}
?>