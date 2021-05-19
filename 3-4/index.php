<?php
// 作成したpdo.phpを読み込む
require_once("pdo.php");
// 作成したgetData.phpを読み込む
require_once("getData.php");

// 関数connect()からPDOを取得する
$pdo = connect();

// getDataクラスをインスタンス化して取得
$getData = new getData();
// ユーザ情報インスタンス化して取得
$users_data = $getData->getUserData();
// 記事情報インスタンス化して取得
$post_data = $getData->getPostData();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="contents clearfix">
    <div class="photo">
      <img src="./images/yigroup.png" alt="YIGroup">
    </div>
    <div class="haeader1">
      <p>ようこそ<?php echo $users_data["last_name"]; ?><?php echo $users_data["first_name"]; ?>さん</p>
    </div>
    <div class="header2">  
      <p>最終日ログイン：<?php echo $users_data["last_login"]; ?></p>
    <div>
    </div>
  </header>
  <main>
      <table >
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>

        <?php while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
         <td> <?php echo $row['id'] ?> </td>
         <td> <?php echo$row['title'] ?> </td>
         <td> <?php echo$row['category_no'] ?> </td>
         <td> <?php echo $row['comment'] ?> </td>
         <td> <?php echo $row['created'] ?> </td>
        </tr>
        <?php } ?>
      </table>
  </main>
  <footer>
    <p>Y&I group.inc</p>
  </footer>
</body>
</html>
