<?php

require_once 'C:\Alura_Cursos\vendor\autoload.php';

use Alura\Pdo\Domain\Model\Student;

$pdo = Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$statemant = $pdo->query('SELECT * FROM students');

var_dump($statemant->fetchAll(PDO::FETCH_ASSOC));
var_dump($pdo);