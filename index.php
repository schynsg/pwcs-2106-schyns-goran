<?php
require('./configs/config.php');
require('./utils/dbaccess.php');
require('./models/applicant.php');
require('./models/level.php');
require ('./models/application.php');

$connection = getConnection();

if (isset($_GET['maintenance'])) {
    $view = 'maintenance.php';
} else {
    $applicants = allApplicants($connection);
    $levels = allLevels($connection);
    $applications = allApplications($connection);

    $view = 'applicants.php';
}


require("./views/{$view}");