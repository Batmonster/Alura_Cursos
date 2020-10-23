<?php

require_once 'C:\Alura_Cursos\vendor\autoload.php';

use Alura\Pdo\Domain\Model\Student;


$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue( 1,  3,  PDO::PARAM_INT);

var_dump($preparedStatement->execute());

$preparedStatement->bindValue( 1,  4,  PDO::PARAM_INT);

var_dump($preparedStatement->execute());