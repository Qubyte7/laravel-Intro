<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2> Home page </h2>
    <!-- to see the current URL -->
    {{URL::current()}} 
    <p>Click to tyhe abiut page <a href="/about1">ABOUT</a></p>
<form action="{{URL::to('/about1')}}">
    <input type="text" name = "Input">
    <input type="submit" value = "submit">

</form>
</body>
</html>