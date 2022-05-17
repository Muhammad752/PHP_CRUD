<?php
    require '../partials/database.php';
    var_dump($dbh);
        if(isset($_POST)){

            $sku = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type'];

            $stmt=$dbh->prepare($insert);
            $stmt->execute([$sku,$name,$price,$type,"as"]);
            header("Location: ../index.php");
        }
?>

