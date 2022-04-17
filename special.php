<?php
include 'arrayTeams.php';

// - Le nom de l'équipe
// - L'écusson de l'équipe
// - La description Française
// - L'année de création
// - Les maillots Domicile + Exterieur
// - Le nom du stade
// - La photo du stade
?>

<nav>

</nav>

<main>
    <?php
    foreach ($premierLeagueTeams as $key => $value) {

        foreach ($value as $team => $informationTeam) {
    ?>
            <a class="changeToDetails" href="details.php?id=<?= (int)$team; ?>">
                <div class="container" id="">
                    <div class="card">
                        <div class="teams">
                            <h2><?= $informationTeam['strAlternate']; ?></h2> <!-- nom de l'équipe --->
                            <img class="imgEcusson" src="<?= $informationTeam['strTeamBadge']; ?>" alt=""> <!-- écusson --->
                        </div>

                        <div class="created">
                            <h3>Creation</h3>
                            <span><?= $informationTeam['intFormedYear']; ?></span> <!-- Année de création --->
                        </div>
                        <div class="maillots">
                            <h3>Nos maillots</h3>
                            <img class="imgTShirt" src="<?= $informationTeam['strTeamJersey']; ?>" alt=""> <!-- les maillots --->
                        </div>
                    </div>
                    <div class="faceCache">
                        <div class="description">
                            <h3>Description</h3>
                            <p><?= $informationTeam['strDescriptionEN']; ?></p>
                        </div><!-- description anglaise --->
                        <div class="stadium">
                            <h3><?= $informationTeam['strStadium']; ?></h3> <!-- nom du stade --->
                            <img class="imgStadium" src="<?= $informationTeam['strStadiumThumb']; ?>" alt=""> <!-- photo du stade --->
                        </div>
                    </div>
                </div>
            </a>



    <?php   }
        echo "</main>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Football</title>
    </head>

    <body>
        <nav>
            <!-- mettre une navbar ici -->
        </nav>
    </body>

    </html>