<?php

// PDO
// 데이터베이스 -> PDO -> CRUD
try {
    $dbh = new PDO('mysql:dbname=php_oop;host=127.0.0.1;', 'root', 'root');

    // EXEC
    // $dbh -> exec('CREATE TABLE tests(`id` INT PRIMARY KEY AUTO_INCREMENT)');

    // // QUERY
    // $sth = $dbh->query('SELECT * FROM posts LIMIT 10');
    // while ($row = $sth -> fetchObject()) {
    //     var_dump($row);
    // } 

    // PREPARE
    $sth = $dbh -> prepare('SELECT * FROM posts WHERE user_id = :user_id LIMIT 10 ');

    // $userId = 478;
    // $sth->bindParam(':user_id', $userId);
    if ($sth->execute([ ':user_id' => 478 ])); {
        while ($row = $sth->fetchObject()) {
            var_dump($row);
        }
    }

    // TRANSACTION
    $dbh -> beginTransaction();

    if ($dbh->inTransaction()) {
        $dbh->exec('DELETE FROM posts WHERE user_id = 478');
        $dbh->rollback();
    }

} catch (PDOException $e) {
    var_dump($e -> getMessage());
}