<?php

ini_set('display_errors', true);

require_once 'Entity/Categoria.php';
require_once 'Entity/Livro.php';
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . '/Entity/');
$isDevMode = true;

$dbParams = array(
    'driver'    => 'pdo_mysql',
    'user'      => 'root',
    'password'  => 'victor81854778',
    'dbname'    => 'doctrine'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);

$categoria = $em->getRepository('Entity\Categoria')->findOneById(1);
echo $categoria;