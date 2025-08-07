<?php
    include "service/database.php";

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $passwword = $_POST['password'];

    echo $username . ' ' . $passwword ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "layout/header.html" ?>

<h3>join kocag</h3>

<!-- nyong typo -->
<form action="login.php" method="POST">
    <input type="text" placeholder="username" name="username"/>
    
    <!-- nyong typo -->
    <input type="password" placeholder="password" name="password"/>

    <button type="submit" name="login">masuk mene pak</button>
</form>

<?php include "layout/footer.html" ?>
</body>
</html>
