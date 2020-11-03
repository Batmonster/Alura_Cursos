<?php

require_once 'C:\Alura_Cursos\vendor\autoload.php';

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

$pdo = Alura\Pdo\Infraestructure\Persistence\ConnectionCreator::createConnection();

$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);
