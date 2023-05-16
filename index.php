<?php
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Using the functions</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="shortcut icon" href="path_to_image.png" type="image/png" />
        <link rel="stylesheet" href="src/css/styles.css" />
        <script src="src/js/jquery.min.js"></script>
        <script src="src/js/main.js"></script>
    </head>
    <body>
        <div class="wprapper"><h1>Product Summary</h1>
        <?= makeProducts(); ?>
            <div class="search">
                <form>
                    <label for="searchFor">Search For</label>
                        <input type="text" name="searchFor" id="searchFor"/>
                    <label for="inCategory">In Category</label>
                    <select name="inCategory" id="inCategory">
                        <option value="Mens">Mens</option>
                        <option value="Womens">Womens</option>
                        <option value="Kids">Kids</option>
                    </select>
                    <input type="submit" name="searchBtn" value="Search" />
                </form>
                <sub>To view all product in category search "All"</sub>
            </div>
            <div id="resultArea">Search Results<div id="result"></div></div>
        </div>
    </body>
</html>