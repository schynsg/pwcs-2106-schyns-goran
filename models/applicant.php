<?php

function all(PDO $connection)
{
    $usersRequest = 'SELECT * FROM candidats';
    $pdoSt = $connection->query($usersRequest);

    return $pdoSt->fetchAll();
}