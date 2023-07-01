<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    <!-- the "form " in the action is the url that brings us to another page -->
<form action="form" method = "POST">
<!-- @csrf : will provide and produce a token  -->
@csrf
    <input type="text" name="username" placeholder = "username here...">
    <br>
    <input type="text" name="password" placeholder= "password" >
    <br>
    <input type="submit" value = "Register">
</form>
</body>
</html>