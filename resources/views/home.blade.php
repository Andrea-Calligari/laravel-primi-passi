<?php

 

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>
    <h1>Hello World!</h1>
    <h1>Today is a great day for us!!</h1>

    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{route('about')}}">About</a>
                </li>
                <li>
                    <a href="{{route('community')}}">Community</a>
                </li><li>
                    <a href="{{route('whoWeAre')}}">Who we are</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>