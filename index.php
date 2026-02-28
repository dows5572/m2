<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php"); ?><br><br><hr>
    <h1>Welcome to System</h1>
    <form action="login.php" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" value="Login">

    </form>
</body>
</html>