<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La fiche de <?= $applicant->nom ?> - Écolo</title>
</head>
<body>
<h1><?= $applicant->nom ?></h1>
<div>
    <img src="/images/thumbs/<?= $applicant->photo ?>" alt="<?= $applicant->nom ?>">
</div>
<div>
    <p><?= $applicant->nom ?> est candidat au <?= $applicant->niveau ?> pour l’arrondissement <?= $applicant->arrondissement ?></p>
</div>
<p><a href="/">Voir toutes nos listes</a></p>
</body>
</html>
