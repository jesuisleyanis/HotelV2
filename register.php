<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container py-4">
        <form action="post" class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="first-name" class="form-label">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
            <div class="col-md-8">
                <label for="mail" class="form-label">Mail</label>
                <input type="mail" name="mail" id="mail" class="form-control">
            </div>
            <div class="col-md-8">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-md-8">
                <label for="adress" class="form-label">adresse</label>
                <input type="adress" name="adress" id="adress" class="form-control">
            </div>
            <div class="col-md-8">
                <label for="num" class="form-label">Numéo de téléphone</label>
                <input type="number" name="num" id="num" class="form-control">
            </div>
        </form>
    </div>
</body>

</html>