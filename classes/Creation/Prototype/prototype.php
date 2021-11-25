<?php

namespace Creation\Prototype;
require '..\..\..\vendor\autoload.php';

function client()
{
    $category = new Category("Toys");
    $product = new Goods('Bear', 10, 'Very angry', 5, $category);

    $productCopy = clone $product;
    echo 'Copied';
    print_r($productCopy);
}
client();
