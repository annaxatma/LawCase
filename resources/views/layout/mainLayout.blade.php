<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body style="background-color: #cab08f">
    @include('layout\navigation')
    <br>
<div class="container" style="color: #f0e7da; height: 100%">
    @yield("pageTitle")
    @yield("main_content")
</div>
<br>
<div class="p-3 text-center sticky-bottom" style="color: #b67e3e; background-color: #292021; width:100%">
    @yield("footer")
</div>
</body>
</html>