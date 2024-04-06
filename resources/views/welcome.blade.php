<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<header>
    <form action="#" method="POST">
        <input type="text" class="datepicker">
    </form>
</header>
<table class="table">
    <thead>
        <tr>
            <th>name</th>
            <th>genre</th>
            <th>release date</th>
        </tr>
    </thead>
    <tbody>
    <tr class="active">
        <td>The Shawshank Redemption</td>
        <td>Crime, Drama</td>
        <td>14 October 1994</td>
    </tr>
    <tr>
        <td>The Shawshank Redemption</td>
        <td>Crime, Drama</td>
        <td>14 October 1994</td>
    </tr>
    </tbody>
</table>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
