<?php
require_once('functions.php');
use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase {
    public function test() {
    
        $data = [
            new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt')]),
            new Category('Kids', [new Product('Sneakers'), new Product('Toy car')]),
        ];
        
        $this->assertIsArray(getProductsInCategory('Mens', $data));
        $this->assertNotNull(getProductsInCategory('Mens', $data));

        $this->assertIsBool(doesProductExistInCategory( 'Mens','Blue Shirt', $data));
        $this->assertIsBool(doesProductExistInCategory( 'Mens','Blue Shirt', $data));

        
        $this->assertIsString(doGetProductsInCategory('Mens', $data));
        $this->assertNotNull(doGetProductsInCategory('Mens', $data));
        
        $this->assertIsString(doCheckProductInCategory('Blue Shirt', 'Mens', $data));
        $this->assertNotNull(doCheckProductInCategory('Blue Shirt', 'Mens', $data));
        $this->assertSame('Yes found', doCheckProductInCategory( 'Mens','Blue Shirt', $data));
        $this->assertSame('No not found', doCheckProductInCategory( 'Mens','Black Shirt', $data));
    }

}