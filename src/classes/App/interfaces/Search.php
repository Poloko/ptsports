<?php
namespace App;

interface Search {
        
    /**
     * Return bool if product exists in category.
     *
     * @param string $product
     *
     * @return bool
     */

     public function doesProductExistInCategory(string $product): bool;

    /**
     * Return string if product exists in category.
     *
     * @param string $product
     *
     * @return string
     */
    
     public function doCheckProductInCategory(string $product): string;

    /**
     * Return string of products.
     *
     * @param string $category
     *
     * @return string
     */
    
     public function doGetProductsInCategory(): string;
}