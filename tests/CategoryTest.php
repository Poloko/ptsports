<?php
require_once('src/classes/App/Category.php');
require_once('src/classes/App/Product.php');
use App\Category;
use App\Product;
use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase
{
    public function testClassConstructor(){
        $category = new Category('Mens', [new Product('t-shirt'), new Product('pants'), new Product('vest')]);

        $this->assertSame('Mens', $category->name);
        $this->assertIsString($category->name);
        $this->assertIsArray($category->products);
        
        
        $this->assertIsArray($category->get_products());
        $this->assertNotNull($category->get_products());

        $this->assertTrue($category->doesProductExistInCategory('vest'));
        $this->assertFalse($category->doesProductExistInCategory('Black Shirt'));

        
        $this->assertIsString($category->doGetProductsInCategory());
        $this->assertNotNull($category->doGetProductsInCategory());
        
        $this->assertIsString($category->doCheckProductInCategory('Blue Shirt'));
        $this->assertNotNull($category->doCheckProductInCategory('Blue Shirt'));
        $this->assertSame('Yes pants found', $category->doCheckProductInCategory( 'pants'));
        $this->assertSame('No socks not found', $category->doCheckProductInCategory( 'socks'));
    }
}