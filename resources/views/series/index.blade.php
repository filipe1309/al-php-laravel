<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Controle de series</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Series</h1>
        </div>

        <a href="#" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            @foreach($series as $serie)
                <li class="list-group-item">{{$serie}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>