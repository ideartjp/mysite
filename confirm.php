<?php
// basic
$familyName     = $_POST['familyName'];
$givenName      = $_POST['givenName'];
$familyNameKana = $_POST['familyNameKana'];
$givenNameKana  = $_POST['givenNameKana'];
$zipcode        = $_POST['zipcode'];
$prefecture     = $_POST['prefecture'];
$address        = $_POST['address'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
// representative
$representativeStay           = '上記の予約者と同じ';
$representativeFamilyName     = $_POST['representativeFamilyName'];
$representativeGivenName      = $_POST['representativeGivenName'];
$representativeFamilyNameKana = $_POST['representativeFamilyNameKana'];
$representativeGivenNameKana  = $_POST['representativeGivenNameKana'];
$representativeZipcode        = $_POST['representativeZipcode'];
$representativePrefecture     = $_POST['representativePrefecture'];
$representativeAddress        = $_POST['representativeAddress'];
$representativePhone          = $_POST['representativePhone'];
//  - end -
$checkIn        = $_POST['checkIn'];$checkIn = $_POST['checkIn'];
$transportation = $_POST['transportation'];
$guestNumMr     = $_POST['guestNumMr'];
$guestNumMrs    = $_POST['guestNumMrs'];

// payment
$payment      = $_POST['payment'];
$paymentName  = $_POST['paymentName'];
$paymentNum   = $_POST['paymentNum'];
$paymentMonth = $_POST['paymentMonth'];
$paymentYear  = $_POST['paymentYear'];
$paymentSecur = $_POST['paymentSecur'];
$contact = $_POST['contact'];

?>

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
              <td><?= $familyName . " " . $givenName; ?></td>
            </tr>
            <tr class="form-item">
              <th>かな</th>
              <td><?= $familyNameKana . " " . $givenNameKana; ?></td>
            </tr>
            <tr class="form-item">
              <th>郵便番号</th>
              <td><?= $zipcode; ?></td>
            </tr>
            <tr class="form-item">
              <th>住所</th>
              <td><?= $prefecture . $address; ?></td>
            </tr>
            <tr class="form-item">
              <th>電話番号</th>
              <td><?= $phone; ?></td>
            </tr>
            <tr class="form-item">
              <th>メールアドレス</th>
              <td><?= $email; ?></td>
            </tr>
            <!-- representative -->
            <tr class="form-item">
              <th>宿泊代表者</th>
              <?php if ($representativeFamilyName != NULL && $representativeGivenName != NULL): ?>
                <td><?= $representativeFamilyName . " " . $representativeGivenName; ?></td>
              <?php else: ?>
                <td><?= $representativeStay; ?></td>
              <?php endif; ?>
            </tr>
            <tr class="form-item">
              <th>かな</th>
              <td><?= $representativeFamilyNameKana . " " . $representativeGivenNameKana; ?></td>
            </tr>
            <tr class="form-item">
              <th>郵便番号</th>
              <td><?= $representativeZipcode; ?></td>
            </tr>
            <tr class="form-item">
              <th>住所</th>
              <td><?= $representativePrefecture . $representativeAddress; ?></td>
            </tr>
            <tr class="form-item">
              <th>電話番号</th>
              <td><?= $representativePhone; ?></td>
            </tr>
            <!-- $representative -->
            <tr class="form-item">
              <th>チェックイン予定時刻</th>
              <td><?= $checkIn; ?></td>
            </tr>
            <tr class="form-item">
              <th>交通手段</th>
              <?php if ($transportation == 1): ?>
                <td><?= '車'; ?></td>
              <?php elseif ($transportation == 2): ?>
                <td><?= 'オートバイ'; ?></td>
              <?php elseif ($transportation == 3): ?>
                <td><?= '電車'; ?></td>
              <?php elseif ($transportation == 4): ?>
                <td><?= 'バス'; ?></td>
              <?php else: ?>
                <td><?= 'その他'; ?></td>
              <?php endif; ?>
            </tr>
            <tr class="form-item">
              <th>人数内訳（大人）</th>
              <td><?= '男性' . $guestNumMr . '名 / ' . '女性' . $guestNumMrs . '名'; ?></td>
            </tr>
            <tr class="form-item">
              <th>ご要望など</th>
              <td><?= $contact; ?></td>
            </tr>
            <tr class="form-item">
              <th valign="top">お支払い情報</th>
              <?php if ($payment == '現地決済'): ?>
                <td><?= $payment; ?></td>
              <?php else: ?>
                <td>
                  <?= $paymentNum . "<br />"; ?>
                  <?= $paymentSecur  . "<br />"; ?>
                  <?= $paymentMonth  . " / " . $paymentYear . "<br />"; ?>
                  <?= $paymentName; ?>
                </td>
              <?php endif; ?>
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
