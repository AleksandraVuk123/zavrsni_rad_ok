<?php
    require('database.php');

    $sqlSelect = "SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC";
    $statement=$connection->prepare($sqlSelect);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();
?>


<?php include 'display-posts.php'; ?>



