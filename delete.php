<?php
    require('database.php');

    // Handles Get Request
    if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id"])){
        $id = $_GET["id"];

        try{
            $statement = $pdo->prepare(
                'DELETE FROM users WHERE id = :id');
            $statement->execute(["id" => $id]);
            echo "<script>location.href='read.php?show=all'</script>";
        } catch(PDOExeption $e){
            echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
        }
    } else {
        echo "<script>location.href='read.php?show=all'</script>";
        die();
    }

?>