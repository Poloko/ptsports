<?php
require_once('functions.php');
$data = [
    new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt'), new Product('Cargo Pants'), new Product('Shorts')]),
    new Category('Womens', [new Product('Pink Shirt'), new Product('Purple T-Shirt'), new Product('High Heels'), new Product('Dress')]),
    new Category('Kids', [new Product('Sneakers'), new Product('Toy Car'), new Product('Hoverboard'), new Product('Toy Plain'), new Product('Toy Duck')]),
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Using the functions</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="wprapper"><h1>Product Summary</h1>
            <table>
                <thead>
                    <tr>
                        <th>Catergory</th>
                        <th>Products</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                                            ?>
                                            <tr>
                                                <td><?= $value->name; ?></td>
                                                <td>
                                                    <?php foreach($value->products as $k => $v){
                                                        ?>
                                                            <span><?= $v->name; ?></span>
                                                        <?php

                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                                <?php
                        }
                    ?>
                </tbody>
            </table>
            <h2>Checks</h2>
            <p>Check if "Cargo Pants" is in Mens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Mens", "Cargo Pants", $data) ?></p>
            <p>Check if "Cargo Pants" is in Kids category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Kids", "Cargo Pants", $data) ?></p>
            <p>Check if "Cargo Pants" is in Womens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Womens", "Cargo Pants", $data) ?></p>
            <p>Check if "High Heels" is in Mens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Mens", "High Heels", $data) ?></p>
            <p>Check if "High Heels" is in Kids category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Kids", "High Heels", $data) ?></p>
            <p>Check if "High Heels" is in Womens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Womens", "High Heels", $data) ?></p>
            <p>Check if "Hoverboard" is in Mens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Mens", "Hoverboard", $data) ?></p>
            <p>Check if "Hoverboard" is in Kids category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Kids", "Hoverboard", $data) ?></p>
            <p>Check if "Hoverboard" is in Womens category</p>
            <p class="answer"><?php echo doCheckProductInCategory("Womens", "Hoverboard", $data) ?></p>
            <p>Return Mens category</p>
            <div class="products"><?= doGetProductsInCategory('Mens', $data); ?></div>
            <p>Return Womens category</p>
            <div class="products"><?= doGetProductsInCategory('Womens', $data); ?></div>
            <p>Return Kids category</p>
            <div class="products"><?= doGetProductsInCategory('Kids', $data); ?></div>
        </div>
    </body>
</html>