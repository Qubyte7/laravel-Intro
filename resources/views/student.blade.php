<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student template </h1>
 <h1>Marks : {{10 +10 }}</h1>   
    <h2>Number of group members : {{count($students)}}</h2> 
<!-- if -->

@if(count($students) == 4)
<h2>The group is okay 😁</h2>
@else
<h2>the team is not ready !😣</h2>
@endif

<!-- for loop -->

@for($i=0;$i<5;$i++)<h1> we are using for loop, iteration  {{$i}}</h1>
@endfor

<!-- for each -->
@foreach($students as $family)
<h1>{{$family}}</h1>
@endforeach


<?php 
echo "<h1> It can be okay if php syntax worked </h1>";
?>

<!-- includeing another view -->
@include('innerView')

<!-- js in laravel -->
<script>
    var data =@json($family);
    console.warn(data);
</script>






</body>
</html>