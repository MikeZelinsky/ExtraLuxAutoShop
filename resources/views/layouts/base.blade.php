<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        header{
           position: fixed;
            float: top;
            width: 100%;
        }
        aside{
            position: fixed;
            float: left;
            margin-top: 100px;
        }
        article{
            position: static;
            float: right;
            width: 75%;
            margin-top: 100px;
        }
        section{
            position: fixed;
            width: 75%;
            margin-top: 70px;
            margin-bottom: 100px;
        }
        card{
            position: static;
            width: 25%;
            margin-top: 50px;
        }
    </style>
</head>
<body>

@include('inc.header')
{{--@include('inc.filter')--}}
{{--@include('inc.content')--}}




</body>
</html>