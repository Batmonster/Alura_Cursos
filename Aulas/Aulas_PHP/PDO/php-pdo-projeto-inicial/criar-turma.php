<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once "C:/Alura_Cursos/vendor/autoload.php";

$connection = ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);

//var_dump($studentRepository);
//die;


$connection->beginTransaction();

try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeimmutable('1985-05-01')
    );

    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeimmutable('1985-05-01')
    );

    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
