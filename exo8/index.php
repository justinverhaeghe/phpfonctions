<?php
// $number1 = rand(1,1000);
// $number2 = rand(1,1000);
// $number3 = rand(1,1000);

function addition($number1 = 1, $number2 = 1, $number3 = 1)
{
    return 'La somme est de '. $number1 + $number2 + $number3;
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
    <title>PHP Fonctions - Exercice 8</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Fonctions</h1>
        <h2>Exercice 8</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="p-4">
            <p class="text-center">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de
                ces nombres.
                Tous les paramètres doivent avoir une valeur par défaut.</p>
        </div>
        <hr>
        <!-- Réponse -->
        <div class="text-center ">
            <p>
                <?= addition() ?>
            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>