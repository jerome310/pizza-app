<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="flex items-center justify-center h-screen flex-col">
    <div class="text-6xl">Pizzas</div>
    <p>{{$type}} - {{$base}} - {{$price}}</p>
    @for($i=0; i < count($pizzas); i++;){
       <p>{{$pizzas[$i]['type']}}</p>
    }
   </div>
</body>
</html>