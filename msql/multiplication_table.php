<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>九九テーブルを作ってみた</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link rel="stylesheet" href="multiplication_table.css">
</head>
<body>
  <div class="multiplication_table_wrapper">
    <div class="container">
      <div class="multiplication_table">
        <table>
        <?php // 1両目・11列目に色をつける、2列目・2行目以降は奇数行・列に色をつける

        for($i = 1; $i < 10; $i++){
          echo '<tr>';
            for($j = 1; $j < 10; $j++){
                $x = $i * $j;
                if ($i == 1 || $j == 1) {
                  echo '<td style="background-color:rgba(7,191,163,0.3);">' . $x . '</td>';
                } elseif ($i % 2 != 0 || $j % 2 != 0) {
                  echo '<td style="background-color:rgba(7,191,163,0.3);">' . $x . '</td>';
                } else {
                  echo "<td>$x</td>";
                }
            }
          echo '</tr>';
        }

        ?>
        </table>

        <!-- <table>
        <?php // 配列は使ってないけど、foreachも使わないバージョンができた(笑)

        // for($i = 1; $i < 10; $i++){
        //     echo '<tr>';
        //     for($j = 1; $j < 10; $j++){
        //         $x = $i * $j;
        //         echo "<td>$x</td>";
        //     }
        //     echo '</tr>';
        // }
        //
        // ?>
        </table> -->
      </div>
    </div>
  </div>
</body>
</html>
