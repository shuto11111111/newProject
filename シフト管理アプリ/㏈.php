<?php
// ==========================
// データベース接続設定
// ==========================

// ホスト名
$host = "localhost";
// ユーザー名
$user = "root";
// パスワード
$pass = "root";
// データベース名
$dbname = "studb_test";

// 接続処理
$conn = new mysqli($host, $user, $pass, $dbname);

// 接続エラー確認
if ($conn->connect_error) {
    die("データベース接続失敗: " . $conn->connect_error);
}


// 文字コード設定（日本語対応）
$conn->set_charset("utf8");

?>