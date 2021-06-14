<?php

function allLevels(PDO $connection)
{
    $levelRequest = 'SELECT * FROM niveaux';
    $pdoSt = $connection->query($levelRequest);

    return $pdoSt->fetchAll();
}

/*
function levelsDistricts(PDO $connection, array $ids)
{

}
*/