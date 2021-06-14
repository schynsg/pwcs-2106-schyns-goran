<?php

use Intervention\Image\ImageManagerStatic as Image;

if (isset($_POST['thumbs'])){

    // supprimer toutes les vieilles vignettes
    $directory = "./images/thumbs/";
    $files = glob($directory . "*.jpg");
    foreach ($files as $file){
        unlink($file);
    }

    // Créer toutes les vignettes

    $img = Image::make('./images/1_Alain_Maron_8.jpg');
    $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $img->crop(300, 300, 0, 0);
    $img->save('./images/thumbs/1_Alain_Maron_8.jpg');
}


$directory = "./images/thumbs/";
$filecount = 0;
$files = glob($directory . "*.jpg");
if ($files){
    $filecount = count($files);
}

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance</title>
</head>
<body>
<h1>Maintenance des images</h1>
<p>Ce formulaire vous permet de déclencher la génération de vignettes d’une
    taille de 300 px (largeur) sur 300 px (hauteur).</p>
<p>Les images originales seront d’abord redimensionnées et cropées</p>
<p>Pour le moment, il y a <?= $filecount ?> vignettes dans le dossier des
    vignettes
<p>
<form action="#" method="post">
    <input type="submit" name="thumbs" value="générer de nouvelles vignettes">
</form>
</body>
</html>
