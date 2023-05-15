<?php
require_once('src/Category.php');
use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase
{
    public function testClassConstructor(){
        $category = new Category('Mens', ['t-shirt', 'pants', 'vest']);

        $this->assertSame('Mens', $category->name);
        $this->assertIsString($category->name);
        $this->assertIsArray($category->products);
    }
}