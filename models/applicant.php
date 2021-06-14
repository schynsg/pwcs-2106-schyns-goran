<?php

function allApplicants(PDO $connection)
{
    $applicantsRequest = 'SELECT * FROM candidats';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}