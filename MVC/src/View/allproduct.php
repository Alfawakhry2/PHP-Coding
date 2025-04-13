<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all Products</title>
</head>
<body>
<?php 
foreach($products as $product){
    echo $product['title'] . "<br>";
    echo $product['description'] . "<br>";
    echo $product['price'] . "<br>";
    echo "<hr>";
}
?>




</body>
</html>