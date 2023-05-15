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
    
/**
 * Return bool if product exists in category.
 *
 * @param string $category
 * @param string $product
 * @param array $data
 *
 * @return bool
 */

 function doesProductExistInCategory(string $category, string $product, array $data): bool {
    // Loop though data
    for ($x = 0; $x <= (count($data) - 1); $x++) {
         //check for needed category
        if($data[$x]->name == $category){
             //loop through product array
             for ($t = 0; $t <= (count($data[$x]->products)- 1); $t++) {
                //check if product exists in category
                if($product == $data[$x]->products[$t]->name){
                //If found return true
                return true;
                }
            }
        }
    }
    //not found return false
    return false;
}   

/**
 * Return string if product exists in category.
 *
 * @param string $category
 * @param string $product
 * @param array $data
 *
 * @return string
 */
   
 function doCheckProductInCategory(string $category, string $product, array $data): string{
   
   if( doesProductExistInCategory($category, $product, $data)){
       return "Yes found";
   } 
       
   return "No not found";
          
}

/**
 * Return string of products.
 *
 * @param string $category
 * @param array $data
 *
 * @return string
 */
   
 function doGetProductsInCategory(string $category, array $data): string{
       
   $results = getProductsInCategory($category, $data);
   $return = "";
   if(count($results) > 0){
        for ($x = 0; $x <= (count($results) - 1); $x++) {
            $name = $results[$x]->name;
            $return .= "<span>$name</span>"; 
        }
   }
   return $return;
}