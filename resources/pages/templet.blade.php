<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etkalemy</title>


    <link rel="stylesheet" type="text/css" href="/css/bs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/mycss.css">

</head>
<body>

<div class="container" style="height:100%">

    @include("pages.nav")

    <div class="holder">
        @yield('content')
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/angular.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>