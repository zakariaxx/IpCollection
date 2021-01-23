<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Liste des adresses IP</h1>
<table class="table " style="margin-top:2%">
    <thead>
    <tr class="table">
        <th scope="col">Datetime</th>
        <th scope="col">IP</th>
    </tr>
    </thead>
    <tbody>
    @foreach($visits as $visit)
    <tr>
        <td>{{$visit->ip}}</td>
        <td>{{$visit->Datetime}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
