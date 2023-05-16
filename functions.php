<?php
require_once('src/classes/autoload.php');

use App\Category;
use App\Product;

//data array
$data = [
     new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt'), new Product('Cargo Pants'), new Product('Shorts')]),
     new Category('Womens', [new Product('Pink Shirt'), new Product('Purple T-Shirt'), new Product('High Heels'), new Product('Dress')]),
     new Category('Kids', [new Product('Sneakers'), new Product('Toy Car'), new Product('Hoverboard'), new Product('Toy Plain'), new Product('Toy Duck')]),
];

//handle ajax request
if(isset($_POST['search'])){
    //collet search variables
    $searchFor = $_POST['search'];
    //create results variable
    $result = "";
    //search
    for($x=0; $x < count($data); $x++){
        //check if correct category
        if($data[$x]->name == $searchFor['in']){
            //Check for all request else find single item
            if(strtolower($searchFor['item']) == "all"){
                //set result as products from category
                $result = $data[$x]->doGetProductsInCategory();
            } else {
                //check for single product in category
                $result = $data[$x]->doCheckProductInCategory($searchFor['item']);
            }
        }
    }
    //result
    echo $result;
}

function makeProducts(){
    GLOBAL $data;
    $products = "";
    //loop through data
    for($x=0; $x < count($data); $x++){
        //create content
        $products .= '<div class="products"><div>'.$data[$x]->name."</div><div>";
        //loop through products
        for($t=0; $t < count($data[$x]->products); $t++){
            //get product name
            $product = $data[$x]->products[$t]->name;
            $products .= "<span>$product</span>"; 
        }
        //close divs
        $products .= "</div></div>";
    } 
    echo $products;
}