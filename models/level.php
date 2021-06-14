<?php

function allLevels(PDO $connection)
{
    $levelRequest = 'SELECT DISTINCT arrondissements.id FROM niveaux INNER JOIN candidatures ON niveaux.id = candidatures.niveau_id INNER JOIN arrondissements ON arrondissements.id = candidatures.arrondissement_id';
    $pdoSt = $connection->query($levelRequest);

    return $pdoSt->fetchAll();
}

/*
function levelsDistricts(PDO $connection, array $ids)
{

}
*/