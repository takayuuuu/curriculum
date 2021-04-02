<?php
// ceil（切り上げ）
    $x = 7.6;
    echo ceil($x);
    echo "<br>";
    
    // floor（切り捨て）
    $x = 8.4;
    echo floor($x);
    echo "<br>";
    
    // round（四捨五入）
    $x = 7.2;
    echo round($x);
    echo "<br>";

    // pi（円周率）
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(4);
    echo "<br>";

    // mt_rand（乱数）
    echo mt_rand(1, 50);
    echo "<br>";

    // strlen（文字列の長さ）
    $str = "takahashi";
    echo strlen($str);
    echo "<br>";

    // strpos（検索)
    $str = "yoneyama";
    echo strpos($str, "n");
    echo "<br>";

    // substr（文字列の切り取り）
    $str = "yoneyama";
    echo substr($str, -3, 2);
    echo "<br>";

    // str_replace（置換）
    $str = "yoneyama";
    echo str_replace("yone", "YONE", $str);
    echo "<br>";

    // printf（フォーマット化した文字列を出力）
    $name = "髙橋さん";
    $limit_number = 700;
    printf("%sの残り時間はあと%d時間です", $name, $limit_number);
    echo "<br>";

    $limit_hour = 2;
    $limit_minute = 3;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo "<br>";

    // sprintf（変数に代入できるprintf）
    $limit_hour = 6;
    $limit_minute = 9; 
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;






