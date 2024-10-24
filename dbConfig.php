<?php

$dsn = 'mysql:host=localhost;dbname=portfolio;charset=utf8';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // エラーメッセージを表示してスクリプトを終了
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}
