<?php
namespace App;
require('interfaces/Search.php');

class Category implements Search {

    public string $name;
    public array $products;
    
    public function __construct(string $name, array $products) {
        $this->name     = $name;
        $this->products = $products;
    }
        
    /**
     * Returns array of products
     *
     *
     * @return array
     */

    public function get_products():array{
        return $this->products;
    }
        
    /**
     * Return bool if product exists in category.
     *
     * @param string $product
     *
     * @return bool
     */

    public function doesProductExistInCategory(string $product): bool {
        //get products
        $products = $this->get_products();
        //loop through product array
        for ($t = 0; $t < count($products); $t++) {
            //check if product exists in category
            if(strtolower($product) == strtolower($products[$t]->name)){
            //If found return true
            return true;
            }
        }
        //not found return false
        return false;
    }   

    /**
     * Return string if product exists in category.
     *
     * @param string $product
     *
     * @return string
     */
    
    public function doCheckProductInCategory(string $product): string{

        if( $this->doesProductExistInCategory($product)){
            return "Yes $product found";
        } 
            
        return "No $product not found";
            
    }

    /**
     * Return string of products.
     *
     * @param string $category
     *
     * @return string
     */
    
    public function doGetProductsInCategory(): string{
        
        $results = $this->get_products();
        $return = "";
        if(count($results) > 0){
                for ($x = 0; $x < count($results); $x++) {
                    $name = $results[$x]->name;
                    $return .= "<span>$name</span>"; 
                }
        }
        return $return;
    }
}