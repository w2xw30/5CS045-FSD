<?php 
        function formatPrice($price){
            echo "Rs. $price <br>";
        }

         function getProductsUnderPrice($product,$max){
             return array_filter($product, fn($a)=>$a['price']<=$max);
         }
 ?>