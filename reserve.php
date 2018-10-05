<?php
session_start();

if (isset($_SESSION['familyName'])) {
 $familyName = $_SESSION['familyName'];
} else {
 $familyName = '';
}
if (isset($_SESSION['givenName'])) {
 $givenName = $_SESSION['givenName'];
} else {
 $givenName = '';
}
if (isset($_SESSION['familyNameKana'])) {
 $familyNameKana = $_SESSION['familyNameKana'];
} else {
 $familyNameKana = '';
}
if (isset($_SESSION['givenNameKana'])) {
 $givenNameKana = $_SESSION['givenNameKana'];
} else {
 $givenNameKana = '';
}
if (isset($_SESSION['zipcode'])) {
 $zipcode = $_SESSION['zipcode'];
} else {
 $zipcode = '';
}
if (isset($_SESSION['prefecture'])) {
 $prefecture = $_SESSION['prefecture'];
} else {
 $prefecture = '';
}
if (isset($_SESSION['address'])) {
 $address = $_SESSION['address'];
} else {
 $address = '';
}
if (isset($_SESSION['phone'])) {
 $phone = $_SESSION['phone'];
} else {
 $phone = '';
}
if (isset($_SESSION['email'])) {
 $email = $_SESSION['email'];
} else {
 $email = '';
}
// representative
if (isset($_SESSION['representativeFamilyName'])) {
 $representativeFamilyName = $_SESSION['representativeFamilyName'];
} else {
 $representativeFamilyName = '';
}
if (isset($_SESSION['representativeGivenName'])) {
 $representativeGivenName = $_SESSION['representativeGivenName'];
} else {
 $representativeGivenName = '';
}
if (isset($_SESSION['representativeFamilyNameKana'])) {
 $representativeFamilyNameKana = $_SESSION['representativeFamilyNameKana'];
} else {
 $representativeFamilyNameKana = '';
}
if (isset($_SESSION['representativeGivenNameKana'])) {
 $representativeGivenNameKana = $_SESSION['representativeGivenNameKana'];
} else {
 $representativeGivenNameKana = '';
}
if (isset($_SESSION['representativeZipcode'])) {
 $representativeZipcode = $_SESSION['representativeZipcode'];
} else {
 $representativeZipcode = '';
}
if (isset($_SESSION['representativePrefecture'])) {
 $representativePrefecture = $_SESSION['representativePrefecture'];
} else {
 $representativePrefecture = '';
}
if (isset($_SESSION['representativeAddress'])) {
 $representativeAddress = $_SESSION['representativeAddress'];
} else {
 $representativeAddress = '';
}
if (isset($_SESSION['representativePhone'])) {
 $representativePhone = $_SESSION['representativePhone'];
} else {
 $representativePhone = '';
}
// others
if (isset($_SESSION['checkInTime'])) {
 $checkInTime = $_SESSION['checkInTime'];
} else {
 $checkInTime = '';
}
if (isset($_SESSION['transportation'])) {
 $transportation = $_SESSION['transportation'];
} else {
 $transportation = '';
}
if (isset($_SESSION['guestNumMr'])) {
 $guestNumMr = $_SESSION['guestNumMr'];
} else {
 $guestNumMr = '';
}
if (isset($_SESSION['guestNumMrs'])) {
 $guestNumMrs = $_SESSION['guestNumMrs'];
} else {
 $guestNumMrs = '';
}
if (isset($_SESSION['contact'])) {
 $contact = $_SESSION['contact'];
} else {
 $contact = '';
}

$checkInTimes = array('15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00');

const MIN = 0;
const MAX = 10;

const START_MONTH = 1;
const END_MONTH = 12;

$start_year = date('Y');
$end_year  = $start_year + 20;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約内容入力画面｜小口旅館</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/common.css" rel="stylesheet">
  <link href="css/reserve.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
  <header>
    <div class="container">

    </div>
  </header>
  <div class="reservation-wrapper">
    <div class="container">
      <div class="form-title">
        <h1>まだ予約手続きは完了していません。</h1>
        <p>ご予約情報を入力後、ページ下の「予約内容の最終確認へ進む」ボタンを押してください。</p>
      </div>
      <div class="reservation-form-wrapper">
        <div class="reservation-form">
          <form action="confirm.php" method="post">
          <!-- <form action="session.test.php" method="post"> -->
            <div class="reservation-info basics-wrapper">
              <h2>基本情報の入力</h2>
              <div class="input-area clear">
                <div class="input-left">
                  <span>必須</span>
                  <p>予約者氏名</p>
                </div>
                <div class="input-right">
                  <ul>
                    <li><input class="family-name" type="text" name="familyName" placeholder="(例) 山田" value="<?=$familyName?>"></li>
                    <li><input class="given-name" type="text" name="givenName" placeholder="太郎" value="<?=$givenName?>"></li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>読みがな</p>
                </div>
                <div class="input-right">
                  <ul>
                    <li><input class="family-name" type="text" name="familyNameKana" placeholder="(例) やまだ" value="<?=$familyNameKana?>"></li>
                    <li><input class="given-name" type="text" name="givenNameKana" placeholder="たろう" value="<?=$familyNameKana?>"></li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>郵便番号</p>
                </div>
                <div class="input-right">
                  <input class="zipcode" type="text" name="zipcode" maxlength="8" placeholder="(例) 103-0027" value="<?=$zipcode?>" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','address');">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>住所</p>
                </div>
                <div class="input-right">
                  <input type="text" name="prefecture" class="address" placeholder="※都道府県名は郵便番号を入力した後に自動入力されます。" value="<?=$prefecture?>">
                  <input type="text" name="address" class="address" placeholder="※市区町村名の後に続けて記載してください。" value="<?=$address?>">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>電話番号</p>
                </div>
                <div class="input-right">
                  <input type="tel" name="phone" maxlength="13" placeholder="(例) 090-1234-5678" value="<?=$phone?>">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>メールアドレス</p>
                </div>
                <div class="input-right">
                  <input type="email" name="email" placeholder="(例) yoyaku@gmail.com" value="<?=$email?>">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>宿泊代表者</p>
                </div>
                <div class="input-right">
                  <label>
                    <input class="representative-checkbox" type="checkbox" name="representativeStay" id="representativeCheckbox" checked value="<?=$representativeStay?>">
                    <span class="representative-message">上記の予約者と同じ</span>
                  </label>
                  <p class="notice">（代表者が異なる場合はチェックを外し、情報を入力してください。）</p>
                </div>
                <div class="clear"></div>
                <div id="representativeForm">
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>宿泊代表者氏名</p>
                    </div>
                    <div class="input-right">
                      <ul>
                        <li><input class="family-name" type="text" name="representativeFamilyName" placeholder="(例) 山田" value="<?=$representativeFamilyName?>"></li>
                        <li><input class="given-name" type="text" name="representativeGivenName" placeholder="太郎" value="<?=$representativeGivenName?>"></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>読みがな</p>
                    </div>
                    <div class="input-right">
                      <ul>
                        <li><input class="family-name" type="text" name="representativeFamilyNameKana" placeholder="(例) やまだ" value="<?=$representativeFamilyNameKana?>"></li>
                        <li><input class="given-name" type="text" name="representativeGivenNameKana" placeholder="たろう" value="<?=$representativeGivenNameKana?>"></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>郵便番号</p>
                    </div>
                    <div class="input-right">
                      <input class="zipcode" type="text" name="representativeZipcode" maxlength="8" placeholder="(例) 103-0027" value="<?=$representativeZipcode?>" onKeyUp="AjaxZip3.zip2addr(this,'','representativePrefecture','representativeAddress');">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>住所</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="representativePrefecture" class="address" placeholder="※郵便番号の入力後、自動入力されます。" value="<?=$representativePrefecture?>">
                      <input type="text" name="representativeAddress" class="address" placeholder="※市区町村名の後に続けて記載してください。" value="<?=$representativeAddress?>">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>電話番号</p>
                    </div>
                    <div class="input-right">
                      <input type="tel" name="representativePhone" maxlength="13" placeholder="(例) 090-1234-5678" value="<?=$representativePhone?>">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <!-- <input type="hidden" name="representativeEmail" value="none"> -->
                </div><!-- representativeForm -->
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>チェックイン予定時刻</p>
                </div>
                <div class="input-right">
                  <select class="checkin-time" name="checkInTime" value="<?=$checkInTime?>">
                    <?php foreach ($checkInTimes as $time): ?>
                      <option value='<?=$time?>'><?=$time?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left transportation-form">
                  <span>必須</span>
                  <p>交通手段</p>
                </div>
                <div class="input-right">
                  <label>
                    <input type="radio" name="transportation" value="1" class="transportation" checked>
                    <span class="transportation-message">車</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="2" class="transportation">
                    <span class="transportation-message">オートバイ</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="3" class="transportation">
                    <span class="transportation-message">電車</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="4" class="transportation">
                    <span class="transportation-message">バス</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="5" class="transportation">
                    <span class="transportation-message">その他</span>
                  </label>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>人数内訳（大人）</p>
                </div>
                <div class="input-right">
                  <div class="input-mr">
                    <p>男性：<select class="num-mr" name="guestNumMr">
                      <?php for ($i = MIN; $i <= MAX; $i++): ?>
                        <option value='<?=$i?>'><?=$i?></option>
                      <?php endfor; ?>
                    </select> 名</p>
                  </div>
                  <div class="input-mrs">
                    <p>女性：<select class="num-mrs" name="guestNumMrs">
                      <?php for ($i = MIN; $i <= MAX; $i++): ?>
                        <option value='<?=$i?>'><?=$i?></option>
                      <?php endfor; ?>
                    </select> 名</p>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span class="any">任意</span>
                  <p>ご要望など</p>
                </div>
                <div class="input-right">
                  <textarea name="contact" rows="12" cols="30" placeholder="※食材の苦手やアレルギーをお持ちの方、記念日・特別な予約の方、駅からの送迎希望、その他施設への質問がある方はこちらにご記入をお願いします。"></textarea>
                  <div class="count-text"value="<?=$contact?>">
                    <span class="count-text-color" id="countUp">0</span>
                    <span class="count-text-color">/ 200文字</span>
                  </div>
                  <p class="notice">※内容によっては、ご希望に添えない場合もございます。</p>
                </div>
                <div class="clear"></div>
              </div>
            </div><!-- reservation-info basics-wrapper -->
            <div class="reservation-info payment-wrapper">
              <h2>お支払い情報</h2>
              <div class="choose-payment">
                <label>
                  <input type="radio" name="payment" value="現地決済" id="cash" class="payment" checked>
                  <span class="payment-message">現地決済</span>
                </label>
                <label>
                  <input type="radio" name="payment" value="クレジットカード" id="creditCard" class="payment">
                  <span class="payment-message">クレジットカード</span>
                </label>
                <div id="creditForm">
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>カード番号</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="paymentNum" maxlength="16">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>セキュリティーコード</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="paymentSecur" maxlength="4" id="securityCode">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>有効期限</p>
                    </div>
                    <div class="input-right">
                      <select class="expiration-date" name="paymentMonth">
                        <?php for ($i = START_MONTH; $i <= END_MONTH; $i++): ?>
                          <option value='<?=$i?>'><?=$i?></option>
                        <?php endfor; ?>
                      </select>
                      <select class="expiration-date" name="paymentYear">
                        <?php for ($i = $start_year; $i <= $end_year; $i++): ?>
                          <option value='<?=$i?>'><?=$i?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>カード名義</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="paymentName">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <p>※クレジットカードの決済日は本日となります。予約キャンセル時には返金処理をいたします。</p>
                </div>
              </div>
            </div><!-- reservation-info payment-wrapper -->
            <div class="reservation-info cancel-policy-wrapper">
              <h2>キャンセルポリシー</h2>
              <p class="cansel-message">ご予約後は、下記のポリシーに従ってキャンセル料金が発生致します。ご確認の上、予約をお願いいたします。</p>
              <div class="messagebox-left">
                <ul>
                  <li>7日前</li>
                  <li>3日前</li>
                  <li>前日</li>
                  <li>当日</li>
                  <li>無断キャンセル</li>
                </ul>
              </div>
              <div class="messagebox-right">
                <ul>
                  <li>宿泊代金の20%</li>
                  <li>宿泊代金の50%</li>
                  <li>宿泊代金の80%</li>
                  <li>宿泊代金の100%</li>
                  <li>宿泊代金の100%</li>
                </ul>
              </div>
            </div><!-- reservation-info cancel-policy-wrapper -->
            <input class="submit" style="margin-top: 0px;" type="submit" name="submit" value="予約内容の最終確認へ進む">
        </form>
      </div><!-- reservation-form -->
    </div><!-- reservation-form-wrapper -->
    <div class="plan-confirm-wrapper">
      <h2>選択プランのご確認</h2>
      <div class="plan-confirm">
        <h3>チェックイン日</h3>
        <p>2018/12/12</p>
        <h3>チェックアウト日</h3>
        <p>2018/12/12</p>
        <h3>宿泊人数</h3>
        <p>2名</p>
      </div>
      <div class="plan-confirm">
        <h3>お部屋タイプ</h3>
        <p>浜離宮</p>
        <h3>宿泊プラン名</h3>
        <p>夕朝食付きスタンダードプラン</p>
        <h3>食事</h3>
        <p>2食付き</p>
      </div>
      <div class="plan-confirm">
        <h3>支払い方法</h3>
        <p>カード払い</p>
        <h3>料金（大人 平均/泊）</h3>
        <p>¥ 50,000 × 2名 = ¥ 100,000</p>
        <h3>消費税(8%)</h3>
        <p>¥ 8,000</p>
        <h3>総額1泊 ¥ 108,000</h3>
        <p>12月12日 ¥ 108,000</p>
        <h3>備考</h3>
        <p class="extra-fee">一部の地域では、入湯税や宿泊税などの税金が発生する場合がございます。詳細は宿泊施設へ直接ご確認の上、ご予約くださいませ。</p>
      </div>
      <div class="total-price">
        <p>合計金額</p>
        <h3>¥ 108,000 <span>税込み</span></h3>
      </div>
    </div><!-- container -->
  </div><!-- reservation-wrapper -->
  <footer>
    <div class="container">

    </div>
  </footer>
  <script src="js/reserve.js"></script>
</body>
</html>
