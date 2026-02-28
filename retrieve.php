<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php"); ?><br><hr>
    <h1>Show College Tables</h1>
    <form action="retrieve.php" method="POST">
        <label for="search">Search</label><br>
        <input type="text" name="search" placeholder="Search by college ID or Name"><br><br>
        <input type="submit" value="Search">
        <button><a href="updateform.php">Update</a></button>
    </form><br>
    <table border="1">
        <tr>
            <th>College ID
                <a href="retrieve.php?sort=collegeID&order=asc">ASC</a>
                <a href="retrieve.php?sort=collegeID&order=desc">DESC</a>
            </th>
            <th>College Name
                <a href="retrieve.php?sort=collegeName&order=asc">ASC</a>
                <a href="retrieve.php?sort=collegeName&order=desc">DESC</a>
            </th>
            <th>Population
                <a href="retrieve.php?sort=population&order=asc">ASC</a>
                <a href="retrieve.php?sort=population&order=desc">DESC</a>
            </th>
            <th>Actions</th>
        </tr>
        <?php
        include("connect.php");
        $search="";
        $sort="collegeID";
        $order="asc";
    
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }

        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
        }

        if(isset($_GET['order'])){
            $order = $_GET['order'];
        }

        if ($search != ""){
            $sql = "SELECT * FROM tblColleges WHERE collegeID LIKE '%$search%' OR collegeName
                    LIKE '%$search%'";
        }else {
            $sql = "SELECT * FROM tblColleges ORDER BY $sort $order";
        }

        $results = $conn->query($sql);

        if($results->num_rows > 0){
            while($rows = $results->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$rows["collegeID"].'</td>';
                echo '<td>'.$rows["collegeName"].'</td>';
                echo '<td>'.$rows['population'].'</td>';
                echo '<td><a href=delete.php?colID='.$rows["collegeID"].'>Delete</a> | 
                        <a href=updateform.php?colID='.$rows["collegeID"].'>Update</a></td>';
                echo '</tr>';
            }
        }
        


        ?>

    </table>
</body>
</html>