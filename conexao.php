<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banco de dados</title>
</head>
<body>


</body>
</html>
<?php
$host ="localhost"; //Substitua pelo nome do seu banco de dados
$db = "db";
$user = "root";
$pass ="admin";
$charset = "utf8mb4";

$dsn = "mysql:host = $host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,

    PDO::ETTR_EMULATE_PREPARES => false,

];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexão realizada com sucesso!";
} catch (\PDOException $e) {
    throw new \PDOException ($e->getMessage(), (int)$e->getCode());
}

!