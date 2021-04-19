<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$question1 = $_POST['question1']; //ラジオボタンの内容を受け取る
$answer1 = $_POST['answer1'];   //hiddenで送られた正解を受け取る
$question2 = $_POST['question2']; //ラジオボタンの内容を受け取る
$answer2 = $_POST['answer2'];   //hiddenで送られた正解を受け取る
$question3 = $_POST['question3']; //ラジオボタンの内容を受け取る
$answer3 = $_POST['answer3'];   //hiddenで送られた正解を受け取る
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function result($question, $answer){
  if($question == $answer){
    echo "正解！";
  }else{
    echo "残念･･･";
  }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="answer.css">
</head>
<body>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($question1, $answer1) ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($question2, $answer2) ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($question3, $answer3) ?>
</body>
</html>

