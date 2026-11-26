<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <h2>Bishesh Subedi 2595320</h2>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
    <?php

        require_once 'functions.php';
        
        echo "<h3>task1</h3>";
        $categories = ['Laptops','Phones','Accessories','Audio'];
        foreach($categories as $c){
            echo "$c <br>";
        }

        echo "<h3>task2</h3>";
        $product = [
                    "name" => "Wireless Mouse",
                    "price" => 850,
                    "stock" => 12
                    ];
        echo "{$product['name']} {$product['price']} {$product['stock']}";


        // echo "<h3>task3</h3>";
        $products = [
                        ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>0],
                        ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
                        ["id"=>103, "name"=>"USB-D Cable", "category"=>"Accessories", "price"=>450, "stock"=>35],
                        ["id"=>104, "name"=>"USB-E Cable", "category"=>"Accessories", "price"=>650, "stock"=>15],
                        ["id"=>105, "name"=>"USB-F Cable", "category"=>"Accessories", "price"=>750, "stock"=>35]
                    ];

        echo "<h3>task4</h3>";
        foreach($products as $product){
            echo "{$product['id']} {$product['name']} {$product['category']} {$product['price']} {$product['stock']} <br>";
        }

        echo "<h3>task5</h3>";
        $filtered_array = array_filter($products, fn($n) => $n['price']>500);
        foreach($filtered_array as $f){
            echo "{$f['id']} <br>";
        }

        echo "<h3>task6</h3>";
        $stock = array_filter($products, fn($n) => $n['stock']>15);
        foreach($stock as $f){
            echo "{$f['id']} <br>";
        }

        echo "<h3>task7</h3>";
        $new_array = array_map(fn($a)=>$a['name'], $products);
        foreach ($new_array as $a) {
            echo "$a <br>";
        }

        echo "<h3>task8</h3>";
        $detail = array_map(fn($a)=>"{$a['name']} - {$a['price']} <br>",$products);
        foreach ($detail as $d) {
            echo "$d";
        }

        echo "<h3>task9</h3>";
        $tvalue = array_reduce($products, fn($sum, $a)=>$sum = $a['price']*$a['price']);
        echo "Total value of all stocks is Rs.$tvalue.";

        echo "<h3>task10</h3>";
        $reduced = array_reduce($products, fn($sum, $a) => $a['stock']>0? $sum + 1: $sum,0);
        echo "There are $reduced non empty stocks.";

        echo "<h3>task11</h3>";
        $reverse_products = array_reverse($products);
        foreach($reverse_products as $product){
        echo "{$product['id']} {$product['name']} {$product['category']} {$product['price']} {$product['stock']} <br>";
        }

        echo "<h3>task12</h3>";
        // function formatPrice($price){
        //     echo "Rs. $price";
        // }

        $pseudo_product = ["price"=>250];
        formatPrice($pseudo_product['price']);

        echo "<h3>task13</h3>";
        // function getProductsUnderPrice($product,$max){
        //     return array_filter($product, fn($a)=>$a['price']<=$max);
        // }

        $cheap_products = getProductsUnderPrice($products,500);
        foreach ($cheap_products as $c) {
            echo "{$c['name']} <br>";
        }

    ?>
</body>
</html>
