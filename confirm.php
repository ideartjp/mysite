<?php
session_start();

$validFlag = true;

// ===== validation check =====
// basic
if (!isset($_POST['familyName']) || $_POST['familyName'] == '') {
    $validFlag = false;
}
if (!isset($_POST['givenName']) || $_POST['givenName'] == '') {
    $validFlag = false;
}
if (!isset($_POST['familyNameKana']) || $_POST['familyNameKana'] == '') {
    $validFlag = false;
}
if (!isset($_POST['givenNameKana']) || $_POST['givenNameKana'] == '') {
    $validFlag = false;
}
if (!isset($_POST['zipcode']) || $_POST['zipcode'] == '') {
    $validFlag = false;
}
if (!isset($_POST['prefecture']) || $_POST['prefecture'] == '') {
    $validFlag = false;
}
if (!isset($_POST['address']) || $_POST['address'] == '') {
    $validFlag = false;
}
if (!isset($_POST['phone']) || $_POST['phone'] == '') {
    $validFlag = false;
}
if (!isset($_POST['email']) || $_POST['email'] == '') {
    $validFlag = false;
}
// representative
if (!isset($_POST['representativeStay']) || $_POST['representativeStay'] == '') {
  if (!isset($_POST['representativeFamilyName']) || $_POST['representativeFamilyName'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativeGivenName']) || $_POST['representativeGivenName'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativeFamilyNameKana']) || $_POST['representativeFamilyNameKana'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativeGivenNameKana']) || $_POST['representativeGivenNameKana'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativeZipcode']) || $_POST['representativeZipcode'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativePrefecture']) || $_POST['representativePrefecture'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativeAddress']) || $_POST['representativeAddress'] == '') {
      $validFlag = false;
  }
  if (!isset($_POST['representativePhone']) || $_POST['representativePhone'] == '') {
      $validFlag = false;
  }
}
// others
if (!isset($_POST['checkInTime']) || $_POST['checkInTime'] == '') {
    $validFlag = false;
}
if (!isset($_POST['transportation']) || $_POST['transportation'] == '') {
    $validFlag = false;
}
if (!isset($_POST['guestNumMr']) || $_POST['guestNumMr'] == '') {
    $validFlag = false;
}
if (!isset($_POST['guestNumMrs']) || $_POST['guestNumMrs'] == '') {
    $validFlag = false;
}
// $validFlag == false
if ($validFlag == false) {
  $_SESSION['familyName']     = $_POST['familyName'];
  $_SESSION['givenName']      = $_POST['givenName'];
  $_SESSION['familyNameKana'] = $_POST['familyNameKana'];
  $_SESSION['givenNameKana']  = $_POST['givenNameKana'];
  $_SESSION['zipcode']        = $_POST['zipcode'];
  $_SESSION['prefecture']     = $_POST['prefecture'];
  $_SESSION['address']        = $_POST['address'];
  $_SESSION['phone']          = $_POST['phone'];
  $_SESSION['email']          = $_POST['email'];
  // representative
  $_SESSION['representativeStay']           = $_POST['$representativeStay'];
  $_SESSION['representativeStay']           = $_POST['representativeStay'];
  $_SESSION['representativeFamilyName']     = $_POST['representativeFamilyName'];
  $_SESSION['representativeGivenName']      = $_POST['representativeGivenName'];
  $_SESSION['representativeFamilyNameKana'] = $_POST['representativeFamilyNameKana'];
  $_SESSION['representativeGivenNameKana']  = $_POST['representativeGivenNameKana'];
  $_SESSION['representativeZipcode']        = $_POST['representativeZipcode'];
  $_SESSION['representativePrefecture']     = $_POST['representativePrefecture'];
  $_SESSION['representativeAddress']        = $_POST['representativeAddress'];
  $_SESSION['representativePhone']          = $_POST['representativePhone'];
  // $_SESSION['representativeEmail']         = $_POST['representativeEmail'];
  // others
  $_SESSION['checkInTime']    = $_POST['checkInTime'];
  $_SESSION['transportation'] = $_POST['transportation'];
  $_SESSION['guestNumMr']     = $_POST['guestNumMr'];
  $_SESSION['guestNumMrs']    = $_POST['guestNumMrs'];
  $_SESSION['contact']        = $_POST['contact'];
  header("location: reserve.php");
  exit();
}

// ===== $_POST =====
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
// $representativeStay           = '上記の予約者と同じ';
$representativeStay           = $_POST['representativeStay'];
$representativeFamilyName     = $_POST['representativeFamilyName'];
$representativeGivenName      = $_POST['representativeGivenName'];
$representativeFamilyNameKana = $_POST['representativeFamilyNameKana'];
$representativeGivenNameKana  = $_POST['representativeGivenNameKana'];
$representativeZipcode        = $_POST['representativeZipcode'];
$representativePrefecture     = $_POST['representativePrefecture'];
$representativeAddress        = $_POST['representativeAddress'];
$representativePhone          = $_POST['representativePhone'];
// $representativeEmail          = $_POST['representativeEmail'];
// others
$checkInTime    = $_POST['checkInTime'];
$transportation = $_POST['transportation'];
$guestNumMr     = $_POST['guestNumMr'];
$guestNumMrs    = $_POST['guestNumMrs'];
$contact        = $_POST['contact'];
// payment
$payment      = $_POST['payment'];
$paymentName  = $_POST['paymentName'];
$paymentNum   = $_POST['paymentNum'];
$paymentMonth = $_POST['paymentMonth'];
$paymentYear  = $_POST['paymentYear'];
$paymentSecur = $_POST['paymentSecur'];

// ===== $_SESSION =====
// basic
$_SESSION['familyName']     = $_POST['familyName'];
$_SESSION['givenName']      = $_POST['givenName'];
$_SESSION['familyNameKana'] = $_POST['familyNameKana'];
$_SESSION['givenNameKana']  = $_POST['givenNameKana'];
$_SESSION['zipcode']        = $_POST['zipcode'];
$_SESSION['prefecture']     = $_POST['prefecture'];
$_SESSION['address']        = $_POST['address'];
$_SESSION['phone']          = $_POST['phone'];
$_SESSION['email']          = $_POST['email'];
// representative
// $_SESSION['representativeStay']           = $_representativeStay;
$_SESSION['representativeStay']           = $_POST['representativeStay'];
$_SESSION['representativeFamilyName']     = $_POST['representativeFamilyName'];
$_SESSION['representativeGivenName']      = $_POST['representativeGivenName'];
$_SESSION['representativeFamilyNameKana'] = $_POST['representativeFamilyNameKana'];
$_SESSION['representativeGivenNameKana']  = $_POST['representativeGivenNameKana'];
$_SESSION['representativeZipcode']        = $_POST['representativeZipcode'];
$_SESSION['representativePrefecture']     = $_POST['representativePrefecture'];
$_SESSION['representativeAddress']        = $_POST['representativeAddress'];
$_SESSION['representativePhone']          = $_POST['representativePhone'];
// $_SESSION['representativeEmail']         = $_POST['representativeEmail'];
// others
$_SESSION['checkInTime']    = $_POST['checkInTime'];
$_SESSION['transportation'] = $_POST['transportation'];
$_SESSION['guestNumMr']     = $_POST['guestNumMr'];
$_SESSION['guestNumMrs']    = $_POST['guestNumMrs'];
$_SESSION['contact']        = $_POST['contact'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約内容の確認｜小口旅館</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/common.css" rel="stylesheet">
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
        <h1>ご予約内容の最終確認と確定をお願いいたします。</h1>
      </div>
      <div class="confirm-form">
        <form action="register.php" method="post">
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
                <td><?= "上記の予約者と同じ"; ?></td>
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
            <!-- <input type="hidden" name="representativeEmail" value="none"> -->
            <!-- $representative -->
            <tr class="form-item">
              <th>チェックイン予定時刻</th>
              <td><?= $checkInTime; ?></td>
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
        <form action="test_reserve.php" method="post">
          <input class="back" type="submit" name="back" value="入力画面に戻る">
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
