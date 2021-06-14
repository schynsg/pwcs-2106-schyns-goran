<?php

function allApplications(PDO $connection)
{
    $applicantsRequest = 'SELECT * FROM candidatures INNER JOIN candidats ON candidatures.candidat_id = candidats.id INNER JOIN niveaux ON candidatures.niveau_id = niveaux.id INNER JOIN arrondissements ON candidatures.arrondissement_id = arrondissements.id';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}