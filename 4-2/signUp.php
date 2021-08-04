<?php

// db_connect.phpの読み込み
require_once('db_connect.php');

// POSTで送られていれば処理実行
$name = $_POST["name"];
$password = $_POST["password"];
// パスワードをハッシュ化
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// POSTで送られたデータがあった場合
if (isset($_POST["signUp"])) {
  if (!empty($_POST['name']) && !empty($_POST['password'])) 
  
  // nameとpassword両方送られてきたら処理実行
  
  // PDOのインスタンスを取得
  $pdo = db_connect();
  
  try {
    // SQL文の準備
    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    
// 値をセット 
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
// :passwordにバインドする場合は、$password_hashを使用する
$stmt->bindValue(':password', $password_hash, PDO::PARAM_STR);

// 実行 
$stmt->execute();

// 登録完了メッセージ出力
echo '登録完了';
}catch (PDOException $e) {
// エラーメッセージの出力
echo 'Error: ' . $e->getMessage();
// 終了 
die();
}
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="main.php">
        <p><input type="text" name="name" id="name" placeholder="ユーザー名"></p>
        <p><input type="password" name="password" id="password" placeholder="パスワード"></p>
        <input type="submit" value="新規登録" id="signUp" name="signUp" class="btn">
    </form>
</body>
</html>