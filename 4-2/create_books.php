<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"])) {
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO posts (title, date) VALUES (:title, :date)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 本文をバインド
            $stmt->bindParam(':date', $date);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
            exit;
            // redirect_main_unless_parameter($param);
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
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
    <h1>本 登録画面</h1>
    <form method="POST" action="">
        <p><input type="text" name="title" id="title" placeholder="タイトル"></p>
        <p><input type="text" name="date" id="date" placeholder="発売日"></p>
        在庫数<br>
        <select name= "stock">
          <option value = "">選択してください</option>
        </select>
        <p><input type="submit" value="登録" id="books" name="books" class="btn"></p>
    </form>
</body>
</html>