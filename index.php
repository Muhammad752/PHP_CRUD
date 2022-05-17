<?php
    include 'partials/header.php';
    require_once 'partials/database.php';
?>

<h1>Products List</h1>
<div class="buttons">
    <button onclick="location.href='addPage.php'">Add</button>
    <button onclick="">Delete selected</button>
</div>
<hr>
<br>

<?php foreach($dbh->query("SELECT * FROM `table`") as $row){?>
    <div class='products'>
        <input type="checkbox" name="" id="<?=$row['SKU']?>">
        <p><?=$row['SKU']?></p>
        <p><?=$row['name']?></p>
        <p><?=$row['price']?> $</p>
        <p><?=$row['type']?></p>
    </div>
<?php } ?>



<?php
    include 'partials/footer.php'
?>