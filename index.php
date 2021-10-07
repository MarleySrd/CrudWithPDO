<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="php/action.php" method="post" class="row justify-content-center align-items-center">
        <p class="col-3">étage : <input type="number" name="etage" /></p>
        <p class="col-3">nom : <input type="text" name="nom" /></p>
        <p class="col-3">date : <input type="date" name="date" /></p>
        <p class="col-2"><input type="submit" value="OK" name="button" class="buttonForm"></p>
    </form>
    
    <div id="task"></div>
</body>

</html>