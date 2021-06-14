<?php

function allApplications(PDO $connection)
{
    $applicantsRequest = 'SELECT * FROM candidatures INNER JOIN candidats ON candidatures.candidat_id = candidats.id';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}