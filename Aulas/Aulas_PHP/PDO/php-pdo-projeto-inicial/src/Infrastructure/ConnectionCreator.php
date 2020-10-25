<?php 

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $databasePath = 'C:\Alura_Cursos\Aulas\Aulas_PHP\PDO\php-pdo-projeto-inicial\banco.sqlite';
       
        return new PDO('sqlite:' . $databasePath);
    }
}