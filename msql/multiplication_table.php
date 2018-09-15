<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>九九テーブルを作ろう</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link rel="stylesheet" href="multiplication_table.css">
</head>
<body>
  <div class="multiplication_table_wrapper">
    <div class="container">
      <div class="multiplication_table">
        <?php

        $values = array(
            array('1','2','3','4','5','6','7','8','9'),
            array('2','4','6','8','10','12','14','16','18'),
            array('3','6','9','12','15','18','21','24','27'),
            array('4','8','12','16','20','24','28','32','36'),
            array('5','10','15','20','25','30','35','40','45'),
            array('6','12','18','24','30','36','42','48','54'),
            array('7','14','21','28','35','42','49','56','63'),
            array('8','16','24','32','40','48','56','64','72'),
            array('9','18','27','36','45','54','63','72','81'));

          echo "<table>";
            foreach ($values as $value) {
              echo "<tr>";
              foreach ($value as $num) {
                echo "<td>$num</td>";
              }
              echo "</tr>";
            }
          echo "</table>";

          ?>
      </div>
    </div>
  </div>
</body>
</html>
