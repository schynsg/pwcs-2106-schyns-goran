<?php

function allApplications(PDO $connection)
{
    $applicantsRequest = 'SELECT niveaux.niveau as niveau, candidats.nom as nom, candidatures.statut as statut, candidats.photo as photo, candidats.id as id FROM candidatures INNER JOIN candidats ON candidatures.candidat_id = candidats.id INNER JOIN niveaux ON candidatures.niveau_id = niveaux.id INNER JOIN arrondissements ON candidatures.arrondissement_id = arrondissements.id';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}