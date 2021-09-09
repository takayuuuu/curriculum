<?php

require_once('db_connect.php');

$name = $_POST["name"];
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST["signUp"])) {
  if (!empty($_POST['name']) && !empty($_POST['password'])) 

$pdo = db_connect();
  
try {
    
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    
$stmt = $pdo->prepare($sql);  
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':password', $password_hash, PDO::PARAM_STR);
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

