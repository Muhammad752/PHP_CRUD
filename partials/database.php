<?php
    $dbname='products';
    $host='local';
    $user='root';
    $password='';

    try{
        $dbh= new PDO('mysql:dbname=products;host=localhost',$user,$password);

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }



    $insert='INSERT INTO `table`(`SKU`, `name`, `price`, `type`, `attributes`) VALUES (?,?,?,?,?)';

?>