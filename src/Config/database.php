<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/src");
$isDevMode = true;

// the database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'your_database_user',
    'password' => 'your_database_password',
    'dbname'   => 'your_database_name',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($conn, $config);
?>