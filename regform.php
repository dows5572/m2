<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
 
</head>
<body> 
    <?php include("navbar.php"); ?>
    
    <h1>Registration Form</h1>
    <form action="register.php" method="POST">
        <label for="colID">College ID</label><br>
        <input type="text" 
                name="colID" 
                id="colID"
                placeholder="Enter College ID"><br><br>
        <label for="colName">College Name</label><br>
        <input type="text" 
                name="colName" 
                id="colName"
                placeholder="Enter College Name"><br><br>
        <label for="pop">Population</label><br>
        <input type="number" 
                name="pop" 
                id="pop"
                min = "0"
                placeholder="Enter Population"><br><br>

        <input type="submit" value="Register">
        <button><a href="updateform.php">Update</a></button>
    </form>
    <br><br>
    <?php include("retrieve.php"); ?>
</body>
</html>