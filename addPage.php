<?php
    include 'partials/header.php'
?>

<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>    
        $(function() {
            $('#productType').change(function(){
                $('.attr').hide();
                $('#' + $(this).value()).show();
            });
        });

        // $(function(){
        //     $('button').click(function(){
        //         $('.attr').hide();
        //     });
        // });

    </script>
    </head>
    <body>
    <h1>Product Add</h1>
    <hr>
    <form id="product_form" method="POST" action="database/add-inic.php">

        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku" required>
        <br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required> 
        <br>
        <label for="price">Price ($)</label>
        <input type="text" id="price" name="price" required>
        <br>
        <label for="productType">Type Switcher</label>
        <select name="type" id="productType" required>
            <option value="">Select the type</option>
            <option value="Size">DVD</option>
            <option value="Dimension:">Furniture</option>
            <option value="Weight:">Book</option>
        </select>

            <div id="Size" class="attr">
                <label for="size">Size(MB)</label>
                <input type="text">
            </div>

            <div id="Furniture" class="attr">
                <label for="height">Height(CM)</label>
                <input type="text" id="height">
                <br>
                <label for="width">Width(CM)</label>
                <input type="text" id="width">
                <br>
                <label for="length">Length()</label>
                <input type="text" id="length">
            </div>

            <div id="Book" class="attr">
                <label for="weight">Weight(KG)</label>
                <input type="text" id="weight">
            </div>
        <div class='buttons'>
            <button type="submit">Save</button>
            <button onclick="location.href='index.php'">Cancel</button>
        </div>
    </form>
    
    </body>
</html>