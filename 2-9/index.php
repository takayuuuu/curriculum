<?php
//そのファイル内での関数呼び出しの際に厳密モードでの型検査が行われるようにする
declare(strict_types=1);

//1から100までの数を繰り返す
for ($i = 1; $i <= 100; $i++) {
    //3と5両方の倍数の（15の倍数）なら
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
        echo '<br>';
    //3の倍数のなら
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
        echo '<br>';
    //5の倍数のなら
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
        echo '<br>';
    //上記以外
    } else {
        echo $i;
        echo '<br>';
    }
}
 ?>