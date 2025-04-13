<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
<?php 
foreach($users as $user){
    echo $user['name'] . "<br>";
    echo $user['email'] . "<br>";
    echo "<hr>";
}
?>




</body>
</html>