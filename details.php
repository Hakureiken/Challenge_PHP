<?php
include 'arrayTeams.php';
// $premierLeagueTeams['teams']
$whichTeam = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de l'équipe</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/52f1bac9e4.js" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="detailsContainer">
        <div class="detailsCard">
            <div class="detailsBanner">
                <img src="<?= $premierLeagueTeams['teams'][$whichTeam]['strTeamBanner']; ?>" alt="">
            </div>
            <div class="detailsBox">
                <div class="detailsName">
                    <div class="detailsTeams">
                        <h2><?= $premierLeagueTeams['teams'][$whichTeam]['strAlternate']; ?></h2> <!-- nom de l'équipe --->
                        <img class="imgEcusson" src="<?= $premierLeagueTeams['teams'][$whichTeam]['strTeamBadge']; ?>" alt=""> <!-- écusson --->
                    </div>
                    <div class="detailsCreated">
                        <h3>Creation</h3>
                        <span>Année <?= $premierLeagueTeams['teams'][$whichTeam]['intFormedYear']; ?></span> <!-- Année de création --->
                    </div>
                    <div class="detailsMaillots">
                        <h3>Nos maillots</h3>
                        <img class="imgTShirt" src="<?= $premierLeagueTeams['teams'][$whichTeam]['strTeamJersey']; ?>" alt=""> <!-- les maillots --->
                    </div>
                </div>
                <div class="detailsDescription">
                    <h3>Description</h3>
                    <p><?= $premierLeagueTeams['teams'][$whichTeam]['strDescriptionEN']; ?></p>
                    <div class="detailsTrophy">
                        <h3>Trophy <i class="fa-solid fa-trophy"></i></h3>
                        <?php
                        for ($i = 1; $i < 8; $i++) {

                            if ($premierLeagueTeams['teams'][$whichTeam]['idLeague' . $i] !== NULL) {
                        ?>
                                <span><?= $premierLeagueTeams['teams'][$whichTeam]['strLeague' . $i]; ?></span>
                        <?php
                            }
                        } ?>
                    </div>
                    <div class="detailsSocial">
                        <h3>Réseaux sociaux</h3>
                        <a href="https://<?= $premierLeagueTeams['teams'][$whichTeam]['strWebsite']; ?>" target="_blank"><i class="fa-solid fa-globe"></i></a>
                        <a href="https://<?= $premierLeagueTeams['teams'][$whichTeam]['strFacebook']; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://<?= $premierLeagueTeams['teams'][$whichTeam]['strTwitter']; ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://<?= $premierLeagueTeams['teams'][$whichTeam]['strInstagram']; ?>" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                    </div>
                </div><!-- description anglaise --->
            </div>
            <div class="detailsStadium">
                <div class="detailsInfoStadium">
                    <h3>
                        <?= $premierLeagueTeams['teams'][$whichTeam]['strStadium']; ?>
                    </h3> <!-- nom du stade --->
                    <div class="detailsLocation">
                        <h4>Se trouve à <?= $premierLeagueTeams['teams'][$whichTeam]['strStadiumLocation']; ?> avec une capacité de <?= $premierLeagueTeams['teams'][$whichTeam]['intStadiumCapacity']; ?> personnes.</h3>
                    </div>
                </div>
                <p><?= $premierLeagueTeams['teams'][$whichTeam]['strStadiumDescription']; ?></p>
                <img class="imgStadium" src="<?= $premierLeagueTeams['teams'][$whichTeam]['strStadiumThumb']; ?>" alt=""> <!-- photo du stade --->
            </div>
        </div>
    </div>
</body>
</html>
