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
        <?php
            foreach ($applications as $app) {
        ?>
            <?php
                if ($app->niveau == $level->niveau) {
            ?>
            <section>
                <h2>Les candidats Écolo au <?= $level->niveau ?>, arrondissement « <?= $app->arrondissement ?> »</h2>
                <ol>
                    <li>
                        <div>Philippe Lamberts</div>
                        <div>1e de liste</div>
                        <div>
                            <img src="/images/thumbs/1E-Lamberts-cRalitza-Soultanova-1.jpg"
                                    alt="">
                        </div>
                        <a href="/candidat/?id=1">Voir la fiche de Philippe Lamberts</a>
                    </li>
                </ol>
                <div>
                    <a href="/election/?n_id=1&a_id=14">Voir toute la liste Écolo pour le parlement européen, arrondissement « Belgique »</a>
                </div>
            </section>
            <?php
                }
            ?>
        <?php
            } //end foreach applications
        ?>
    <?php
        } //end foreach levels
    ?>
</body>
</html>
