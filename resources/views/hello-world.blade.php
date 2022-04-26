<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<style>
    h1{
        text-align: center;
    }
    ul{
        display:flex;
        list-style: none;
        width: 50%;
        margin:0 auto;
        justify-content: space-evenly;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <h1> {{ $title }} </h1>
    <ul>
        <li><a href="{{route('supreme')}}">Perché 'Supreme project'?</a></li>
        <li><a href="{{route('project')}}">Il Progetto</a></li>
        <li><a href="{{route('font')}}">Questo font è orrendo!</a></li>
    </ul>
</body>
</html>