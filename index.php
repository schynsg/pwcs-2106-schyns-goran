<?php
require('./configs/config.php');
require('./utils/dbaccess.php');
require('./models/applicant.php');
require('./models/level.php');
require ('./models/application.php');

$connection = getConnection();

$view = 'applicants.php';

$applicants = allApplicants($connection);
$levels = allLevels($connection);

require("./views/{$view}");

/*
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = find($connection, $id);
    $view = 'user.php';
} else {
    $users = all($connection);
    $view = 'users.php';
}

require("./views/{$view}");
*/