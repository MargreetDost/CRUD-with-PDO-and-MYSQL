<?php
    require('database.php');
    initMigration($pdo);
?>

<html>
    <head>
        <title>Simple CRUD</title>
    </head>
    <body>
        <a href="create.php">Create user</a>
        <a href="read.php?show=all">Show all users</a>
        
    </body>
</html>