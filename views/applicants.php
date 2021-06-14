<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidats - Écolo</title>
</head>
<body>
    <h1>Toutes nos listes par élection</h1>
    <?php
        foreach ($levels as $level) {
    ?>
        <section>
            <h2>Les candidats Écolo au <?= $level->niveau ?>, arrondissement «  »</h2>

            <ol>
                <?php
                foreach ($applications as $app) {
                ?>
                    <?php
                    if ($app->niveau == $level->niveau) {
                    ?>
                        <li>
                            <div><?= $app->nom ?></div>
                            <div><?= $app->statut ?></div>
                            <div>
                                <img src="/images/thumbs/<?= $app->photo ?>"
                                        alt="">
                            </div>
                            <a href="/candidat/?id=<?= $app->id ?>">Voir la fiche de <?= $app->nom ?></a>
                        </li>
                    <?php
                        } // end if app->niveau
                    ?>
                <?php
                    } //end foreach applications
                ?>
            </ol>

            <div>
                <a href="/election/?n_id=1&a_id=14">Voir toute la liste Écolo pour le parlement européen, arrondissement « Belgique »</a>
            </div>

        </section>
    <?php
        } //end foreach levels
    ?>
</body>
</html>
