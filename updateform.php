<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("connect.php");
        include("navbar.php");
        
        $updateID = "";
        if(isset($_GET['colID'])){
            $updateID = $_GET['colID'];
        }


    ?>
    <h1>Update</h1>
    <form action="update.php" method="POST">
            <label for="colID">College ID</label><br>
            <input type="text" 
                    name="colID" 
                    id="colID"
                    value="<?php echo $updateID;?>"
                    required
                    placeholder ="Enter College ID"><br></required><br>
            <label for="colName">College Name</label><br>
            <input type="text" 
                    name="colName" 
                    id="colName"
                    placeholder="Enter College Name"><br><br>
            <label for="pop">Population</label><br>
            <input type="number" 
                    name="pop" 
                    id="pop"
                    min="0"
                    placeholder="Enter Population"><br><br>

            <input type="submit" value="Update">
        </form>    
        <?php include("retrieve.php");?>
</body>
</html>