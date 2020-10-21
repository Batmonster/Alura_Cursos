<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'C:\Alura_Cursos\vendor\autoload.php';
echo 'ok';die;

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Willian Felipe', new \DateTimeImmutable('1997-02-26'));

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}')";

echo $sqlInsert;
