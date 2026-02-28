<?php
include("connect.php");
include("navbar.php");

$errors = [];

if (isset($_POST["colID"], $_POST["colName"], $_POST["pop"])) {
    $colID = $_POST["colID"];
    $colName = $_POST["colName"];
    $pop = $_POST["pop"];

    if (empty($colID)) {
        $errors[] = "College ID is required";
    }
    if (empty($colName)) {
        $errors[] = "College Name is required";
    }
    if (empty($pop)) {
        $errors[] = "Population is required";
    }

    if (!empty($errors)) {
        echo "<div style=\"color:red; margin-bottom:10px;\"><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul></div>";
        exit();
    }

    $sql = "INSERT INTO tblColleges VALUES('$colID','$colName',$pop)";

    
        if ($conn->query($sql) === true) {
            header("Location: regform.php");
            exit();
        } else{
        echo "Register failed";

        }

    
}

?>