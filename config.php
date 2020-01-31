<?php 

try {

    $pdo = new PDO("mysql:dbname=microblog_php;host=localhost",'root','');
    
} catch (PDOException $e) {
    echo "Falha: " . $e->getMessage();
}

?>