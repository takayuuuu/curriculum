<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ['80','22','20','21']; 
$question2 = ['PHP','Python','JAVA','HTML']; 
$question3 = ['join','select','insert','update']; 
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $question1[0]; //回答の正解 
$answer2 = $question2[3]; //回答の正解 
$answer3 = $question3[1]; //回答の正解 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="question.css">
</head>
<body>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form method="POST" action="answer.php">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
 <?php foreach($question1 as $value){ ?>
  <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php }?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($question2 as $value){ ?>
  <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php }?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($question3 as $value){ ?>
  <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php }?>
    <?php echo "<br>"; ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="answer1" value="<?php echo $answer1 ?>">
<input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
<input type="hidden" name="answer3" value="<?php echo $answer3 ?>">
<input type="hidden" name="my_name" value="<?php echo $my_name ?>">
<input type="submit" value="回答する">
</form>
</body>
</html>