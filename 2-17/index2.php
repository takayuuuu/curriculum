<!-- 関数 × 条件分岐 -->
<?php
$time = intval(date('H'));
if (4 <= $time && $time <= 12) { // 4時～12時の時間帯のとき 
echo "今{$time}時台です</br>";
echo "おはようございます";
} elseif (12 <= $time && $time <= 20) { // 12時〜20時の時間帯のとき 
echo "今{$time}時台です</br>";
echo "こんにちわ";
} else { // それ以外の時間帯のとき 
echo "今{$time}時台です</br>";
echo "こんばんわ";
} 