<?php
require_once('src/classes/App/Category.php');
use App\Catergory;
use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase
{
    public function testClassConstructor(){
        $category = new Category('Mens', ['t-shirt', 'pants', 'vest']);

        $this->assertSame('Mens', $category->name);
        $this->assertIsString($category->name);
        $this->assertIsArray($category->products);
        
        
        $this->assertIsArray($category->get_products());
        $this->assertNotNull($category->get_products());

        $this->assertIsBool($category->doesProductExistInCategory('Blue Shirt'));
        $this->assertTrue($category->doesProductExistInCategory('Blue Shirt'));

        $this->assertIsBool($category->doesProductExistInCategory('Black Shirt'));
        $this->assertFalse($category->doesProductExistInCategory('Black Shirt'));

        
        $this->assertIsString($category->doGetProductsInCategory());
        $this->assertNotNull($category->doGetProductsInCategory());
        
        $this->assertIsString($category->doCheckProductInCategory('Blue Shirt'));
        $this->assertNotNull($category->doCheckProductInCategory('Blue Shirt'));
        $this->assertSame('Yes found', $category->doCheckProductInCategory( 'Blue Shirt'));
        $this->assertSame('No not found', $category->doCheckProductInCategory( 'Black Shirt'));
    }
}