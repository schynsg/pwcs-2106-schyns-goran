<?php

function allApplicants(PDO $connection)
{
    $applicantsRequest = 'SELECT * FROM candidats';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}

function findApplicant(PDO $connection, $id)
{
    $userRequest = 'SELECT candidats.nom as nom, candidats.photo as photo, niveaux.niveau as niveau, arrondissements.arrondissement as arrondissement FROM candidats INNER JOIN candidatures ON candidatures.candidat_id = candidats.id INNER JOIN niveaux ON niveaux.id = candidatures.niveau_id INNER JOIN arrondissements ON arrondissements.id = candidatures.arrondissement_id WHERE candidats.id = :id';
    $pdoSt = $connection->prepare($userRequest);
    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();
}