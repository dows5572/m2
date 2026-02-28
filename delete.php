<?php
include("connect.php");
echo "<br><br>";
include("navbar.php");
if(isset($_GET['colID'])){
    $deleteID = $_GET['colID'];
}

$sql = "DELETE FROM tblColleges WHERE collegeID = '$deleteID'";

if ($conn->query($sql)=== true){
    echo '<br>Delete Successfully';
    header("Location: retrieve.php");
    } else {
    exit();
    echo 'something went wrong';
}

?>