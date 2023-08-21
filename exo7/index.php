<?php
function situation($gender, $age)
{
    if (($gender === 'Homme') && ($age >= 18)) {
        return 'Vous êtes un Homme et vous êtes majeur ';
    } elseif (($gender === 'Homme') && ($age <= 18)) {
        return 'Vous êtes un Homme et vous êtes mineur ';
    } elseif (($gender === 'Femme') && ($age >= 18)) {
        return 'Vous êtes une Femme et vous êtes majeur ';
    } else {
        return 'Vous êtes une Femme et vous êtes mineure ';
    }
    
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
    <title>PHP Fonctions - Exercice 7</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Fonctions</h1>
        <h2>Exercice 7</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="p-4">
            <p class="text-center">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le
                genre peut être :
                Homme
                Femme

                La fonction doit renvoyer en fonction des paramètres :</p>
            <ul>
                <li>Vous êtes un homme et vous êtes majeur</li>
                <li>Vous êtes un homme et vous êtes mineur</li>
                <li>Vous êtes une femme et vous êtes majeure</li>
                <li>Vous êtes une femme et vous êtes mineure</li>
            </ul>
        </div>
        <hr>
        <!-- Réponse -->
        <div class="text-center ">
            <p>
                <?= situation('Homme', 34) ?>

            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>