<?php
try {
//    https://qiita.com/fujitak/items/b56122e2ecd94022a7b6
    # hostには「docker-compose.yml」で指定したコンテナ名を記載
    $dsn = "mysql:host=mysql_host;dbname=test-database;";
    $db = new PDO($dsn, 'docker', 'docker');

    $sql = "SELECT * FROM test-table";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
