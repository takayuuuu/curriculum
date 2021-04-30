<?php
// // セッション開始
// session_start();
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "root";
// データベース名 loginManagementをYIGroupBlog
$db['dbname'] = "YIGroupBlog";  


// /**
//  * DBの接続設定をしたPDOインスタンスを返却する
//  * @return object
//  */
// function db_connect() {
//   try {
//       // PDOインスタンスの作成
//       $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
//       // エラー処理方法の設定
//       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//       return $pdo;
//   } catch(PDOException $e) {
//       echo 'Error: ' . $e->getMessage();
//       die();
//   }
// }
