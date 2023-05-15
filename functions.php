<?php
require_once('src/autoload.php');

/**
 * Return a products inside a category.
 *
 * @param string $category
 *
 * @return array
 */
function getProductsInCategory(string $category, array $data): array {
    // Loop through data
    for ($x = 0; $x <= (count($data) - 1); $x++) {
        //check for needed category
        if($data[$x]->name == $category){
            //If true return products
            return $data[$x]->products;
        }
    }
    return [];
}
   