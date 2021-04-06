<!-- ループ文 × 条件分岐 -->
<?php
define("GOAL", 40);
$total = 0;
for ($i = 1; $i <= GOAL; $i++) {
    $n = rand(1, 6);
    $total += $n;
    echo "{$i}回目={$n}\n";
    echo "<br>";
    if ($total >= GOAL) {
        echo "合計{$i}回でゴールしました\n";
        break;
    }
}