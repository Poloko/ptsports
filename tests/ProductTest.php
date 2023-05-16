<?php
require_once('src/classes/App/Product.php');
use App\Product;
use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    public function testClassConstructor(){
        $product = new Product('t-shirt');

        $this->assertSame('t-shirt', $product->name);
        $this->assertIsString($product->name);
    }
}