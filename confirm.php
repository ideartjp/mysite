<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約内容の確認｜小口旅館</title>
  <link href="css/confirm.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="container">

    </div>
  </header>
  <div class="reservation-wrapper">
    <div class="container">
      <div class="reservation-form">
        <div class="form-title">
          <h2>予約内容の最終確認</h2>
        </div>
        <form action="complete.php" method="post">
          <table>
            <tr class="form-item">
              <th>氏名</th>
              <td>
                <?php
                  $lastName = $_POST['lastName'];
                  $firstName = $_POST['firstName'];
                  echo $lastName . " " . $firstName;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>かな</th>
              <td>
                <?php
                  $lastNameKana = $_POST['lastNameKana'];
                  $firstNameKana = $_POST['firstNameKana'];
                  echo $lastNameKana . " " . $firstNameKana;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>メールアドレス</th>
              <td>
                <?php
                  $email = $_POST['email'];
                  echo $email;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>電話番号</th>
              <td>
                <?php
                  $phone = $_POST['phone'];
                  echo $phone;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>郵便番号</th>
              <td>
                <?php
                  $postalCode = $_POST['postalCode'];
                  echo $postalCode;
                ?>
              <td>
            </tr>
            <tr class="form-item">
              <th>住所</th>
              <td>
                <?php
                  $adress = $_POST['adress'];
                  echo $adress;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>チェックイン時間</th>
              <td>
                <?php
                  $checkIn = $_POST['checkIn'];
                  echo $checkIn;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>人数</th>
              <td>
                <?php
                  $numOfMen = $_POST['numOfMen'];
                  $numOfWomen = $_POST['numOfWomen'];
                  echo "男性" . $numOfMen . "名 / " . "女性" . $numOfWomen . "名";
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>宿泊代表者</th>
              <td>
                <?php
                  $staying = $_POST['staying'];
                  echo $staying;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th valign="top">お支払い情報</th>
              <td>
                <?php
                  $paymentName = $_POST['paymentName'];
                  $paymentNum = $_POST['paymentNum'];
                  $paymentMonth = $_POST['paymentMonth'];
                  $paymentYear = $_POST['paymentYear'];
                  $paymenSecur = $_POST['paymenSecur'];

                  echo $paymentName . "<br />";
                  echo $paymentNum . "<br />";
                  echo $paymentMonth . " / " . $paymentYear . "<br />";
                  echo $paymenSecur;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>ご要望など</th>
              <td>
                <?php
                  $contact = $_POST['contact'];
                  echo $contact;
                ?>
              </td>
            </tr>
          </table>
          <input class="submit" type="submit" name="submit" value="予約を確定する">
        </form>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">

    </div>
  </footer>
</body>
</html>
