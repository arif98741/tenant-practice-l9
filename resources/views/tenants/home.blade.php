<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial;
        }

        #wrapper {
            margin: 200px auto;
            width: 95%;
        }
        h1, p{
            text-align: center;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <h1>Multi Tenancy - Laravel 9</h1>
    <p>This is a multi tenancy app for serving multiple domain using different database</p>
    <br>
    <p>Domain: <span style="font-style: italic">{{ URL::to('/') }}</span></p>
</div>
</body>
</html>
