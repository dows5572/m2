<?php
include("connect.php");
include("navbar.php");

$errors = [];

if (isset($_POST["colID"], $_POST["colName"], $_POST["pop"])) {
    $updateID = $_POST["colID"];
    $updateName= $_POST["colName"];
    $population = $_POST["pop"];

    if (empty($updateID)) {
        $errors[] = "College ID is required";
    }
    if (empty($updateName)) {
        $errors[] = "College Name is required";
    }
    if (empty($population)) {
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

    $sql = "UPDATE tblColleges SET
        collegeName = '$updateName',
        population = $population
        WHERE  collegeID = '$updateID'";
    
        if ($conn->query($sql) === true) {
            header("Location: updateform.php");
            exit();
        } else{
        echo "Register failed";

        }

    
}

?>