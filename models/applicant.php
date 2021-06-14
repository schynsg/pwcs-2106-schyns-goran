<?php

function allApplicants(PDO $connection)
{
    $applicantsRequest = 'SELECT * FROM candidats';
    $pdoSt = $connection->query($applicantsRequest);

    return $pdoSt->fetchAll();
}

function findApplicant(PDO $connection, $id)
{
    $userRequest = 'SELECT * FROM candidats WHERE id = :id';
    $pdoSt = $connection->prepare($userRequest);
    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();
}