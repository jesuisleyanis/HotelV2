<?php
    include 'php/room.php'
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container py-4"> <!-- Utilisez la classe 'container' et 'py-4' séparément -->
        <div class="row justify-content-center">
            <div>
                <?php
                    session_start();
                        if (isset($_SESSION['user_name'])) {
                            echo "Bonjour, " . $_SESSION['user_name'] . "!";
                        } 
                ?>
            </div>
            <div class="col-md-8">
                <h1>Hotel Neptune</h1>
            </div>
            <div class="col-md-2 mb-3">
                <div class="d-grid gap-2">
                    <a href="login.php" class="btn btn-primary text-white">Se connecter</a>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="d-grid gap-2">
                    <a href="register.php" class="btn btn-primary text-white">S'inscrire</a>
                </div>
            </div>
            <div>
                <h6>Découvrez l'hotel neptune qui vous propose une expérience de l'hotelerie innoubliable</h6>
            </div>
            <div>
                <?php
                $roomObj = new room();
                $rooms = $roomObj->roomDisplay();

                foreach ($rooms as $room){
                    // Début de la ligne
                    echo "<div class='row align-items-center mb-3'>";  // 'align-items-center' est pour aligner verticalement le contenu au centre
                
                    // Contenu de la chambre
                    echo "<div class='col-md-8'>";  // Adaptez la largeur comme nécessaire
                    echo "Numéro de chambre: " . $room['ID_Chambre'] . "<br>";   
                    echo "Type de chambre: " . $room['Type'] . "<br>";
                    echo "Prix de la nuit: " . $room['Prix_par_nuit'] . "<br>";
                    echo "</div>";  // Fin du contenu de la chambre
                
                    // Bouton
                    echo "<div class='col-md-4'>";  // Adaptez la largeur comme nécessaire
                    echo "<a href='login.php' class='btn btn-primary text-white me-2'>Voir la chambre</a>";
                    echo "<a href='login.php' class='btn btn-primary text-white'>Réserver</a>";
                    echo "</div>";  // Fin du bouton
                
                    // Fin de la ligne
                    echo "</div>";
                
                    // Séparateur
                    echo "<hr>";
                }
                
                ?>
            </div>
        </div>
    </div>
</body>
</html>
