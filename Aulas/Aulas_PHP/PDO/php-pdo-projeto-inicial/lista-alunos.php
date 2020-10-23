<?php

require_once 'C:\Alura_Cursos\vendor\autoload.php';

use Alura\Pdo\Domain\Model\Student;


$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statemant = $pdo->query('SELECT * FROM students');

var_dump($statemant->fetchAll(PDO::FETCH_ASSOC));
// var_dump($pdo);