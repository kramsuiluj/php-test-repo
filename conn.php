<?php 

try {

    $pdo = new PDO ('mysql:host=localhost;dbname=pass_db', 'root', '');

} catch (PDOException $e) {

    die($e->getMessage());

}

?>