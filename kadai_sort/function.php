<?php
 // 型宣言と異なるデータ型の場合にエラーを発生させる
 declare(strict_types=1);
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
     <p>
     <?php
          // ソートする配列を宣言（関数の外で）
          $nums = [15, 4, 18, 23, 10];
          
          function sort_2way($array, $order) {
            if($order) {
              echo '昇順にソートします。<br>';
              sort($array);
              foreach($array as $num) { // ループ変数の名前を変更
                echo "{$num}<br>";
              }
            } else {
              echo '降順にソートします。<br>';
              rsort($array);
              foreach($array as $num) { // ループ変数の名前を変更
                echo "{$num}<br>";
              }
            }
          }

          sort_2way($nums, true); // 正しく配列を渡す
          sort_2way($nums, false);
        ?>
     </p>
</body>
</html>