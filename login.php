<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "admin" && $password == "1111"){
    header("location: menu.php");
}else {
    echo "Password wrong try again<br><br>";
    echo '<button><a href="index.php">Try again</a></button>';
}

?>
