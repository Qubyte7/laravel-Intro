<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function adding(){
    $num=1;
    $num2=2;
    $add = $num + $num2;
    return $add;
}

?>
    <p>Your comfort is our Pleasure!</p>
    {{adding()}}
    <br>
   <a href="/laravel/about">About</a>
   <br>
   <a href="/laravel/contact">Contact</a>
</body>
</html>