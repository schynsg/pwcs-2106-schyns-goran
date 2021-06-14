<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

require('./configs/config.php');
require('./utils/dbaccess.php');
require('./models/applicant.php');
require('./models/level.php');
require ('./models/application.php');

$connection = getConnection();

if ($_SERVER['REQUEST_URI'] == '/maintenance') {
    $view = 'maintenance.php';
} else {
    $applicants = allApplicants($connection);
    $levels = allLevels($connection);
    $applications = allApplications($connection);

    $view = 'applicants.php';
}


require("./views/{$view}");