<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portail Entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        textarea { resize: none; }
        .card { width: 25em; }




    </style>
</head>
<body>
<style>
    body
    {
        background-image: url({{url('https://contrats.espl-campus.fr/wp-content/uploads/2020/09/campus_bon.png')}});
        height: 400px;
        width: 100%;
    }
</style>
@yield('contenu')
</body>
</html>