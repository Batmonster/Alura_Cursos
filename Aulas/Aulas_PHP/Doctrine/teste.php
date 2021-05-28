<?php

use Alura\Doctrine\Helper\EntityManagerFactory;

require_once "C:/Alura_Cursos/vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());
