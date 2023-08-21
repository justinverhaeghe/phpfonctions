<?php
$firstNumber = 35580;
$secondNumber = 580;
function compareFunction($firstNumber, $secondNumber)
{
    if ($firstNumber > $secondNumber) {
        echo 'Le premier nombre est plus grand ';
    } elseif ($firstNumber < $secondNumber) {
        echo 'Le premier nombre est plus petit ';
    } else {
        echo 'Egalité';
    }
    ;
}
;
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP Fonctions - Exercice 4</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Fonctions</h1>
        <h2>Exercice 4</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="p-4">
            <p class="text-center">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
            </p>
            <ul>
                <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
                <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
                <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
            </ul>

        </div>
        <hr>
        <!-- Réponse -->
        <div class="text-center ">
            <p>
                <?= compareFunction($firstNumber, $secondNumber) ?>

            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>