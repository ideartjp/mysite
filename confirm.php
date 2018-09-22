<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約内容の確認｜小口旅館</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link href="css/confirm.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="container">

    </div>
  </header>
  <div class="confirm-wrapper">
    <div class="container">
      <div class="form-title">
        <h2>ご予約内容の最終確認と確定をお願いいたします。</h2>
      </div>
      <div class="confirm-form">
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
              <th>郵便番号</th>
              <td>
                <?php
                  $zipcode = $_POST['zipcode'];
                  echo $zipcode;
                ?>
              </td>
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
              <th>電話番号</th>
              <td>
                <?php
                  $phone = $_POST['phone'];
                  echo $phone;
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
            <!-- representative -->
            <tr class="form-item">
              <th>宿泊代表者</th>
              <td>
                <?php

                  $representativeStay = '上記の予約者と同じ';
                  $representativeLastName = $_POST['representativeLastName'];
                  $representativeFirstName = $_POST['representativeFirstName'];

                  if ($representativeLastName != NULL && $representativeFirstName != NULL) {
                    echo $representativeLastName . " " . $representativeFirstName;
                  } else {
                    echo $representativeStay;
                  }

                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>かな</th>
              <td>
                <?php
                  $representativeLastNameKana = $_POST['representativeLastNameKana'];
                  $representativeFirstNameKana = $_POST['representativeFirstNameKana'];
                  echo $representativeLastNameKana . " " . $representativeFirstNameKana;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>郵便番号</th>
              <td>
                <?php
                  $representativeZipcode = $_POST['representativeZipcode'];
                  echo $representativeZipcode;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>住所</th>
              <td>
                <?php
                  $representativeAdress = $_POST['representativeAdress'];
                  echo $representativeAdress;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>電話番号</th>
              <td>
                <?php
                  $representativePhone = $_POST['representativePhone'];
                  echo $representativePhone;
                ?>
              </td>
            </tr>
            <!-- $representative -->
            <tr class="form-item">
              <th>チェックイン予定時刻</th>
              <td>
                <?php
                  $checkIn = $_POST['checkIn'];
                  echo $checkIn;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>交通手段</th>
              <td>
                <?php
                  $transportation = $_POST['transportation'];
                  echo $transportation;
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th>人数内訳（大人）</th>
              <td>
                <?php
                  $guestNumMr = $_POST['guestNumMr'];
                  $guestNumMrs = $_POST['guestNumMrs'];
                  echo "男性" . $guestNumMr . "名 / " . "女性" . $guestNumMrs . "名";
                ?>
              </td>
            </tr>
            <tr class="form-item">
              <th valign="top">お支払い情報</th>
              <td>
                <?php
                  $payment = $_POST['payment'];
                  $paymentName = $_POST['paymentName'];
                  $paymentNum = $_POST['paymentNum'];
                  $paymentMonth = $_POST['paymentMonth'];
                  $paymentYear = $_POST['paymentYear'];
                  $paymenSecur = $_POST['paymentSecur'];

                  if ($payment == '現地決済') {
                    echo $payment;
                  } else {
                    echo $paymentNum . "<br />";
                    echo $paymenSecur . "<br />";
                    echo $paymentMonth . " / " . $paymentYear . "<br />";
                    echo $paymentName;
                  }
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
