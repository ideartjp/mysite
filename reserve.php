<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約内容入力画面｜小口旅館</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link href="css/reserve.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <div class="reservation-info basics-wrapper">
              <h2>基本情報の入力</h2>
              <div class="input-area clear">
                <div class="input-left">
                  <span>必須</span>
                  <p>予約者氏名</p>
                </div>
                <div class="input-right">
                  <ul>
                    <li><input class="lastName" type="text" name="lastName" placeholder="(例) 山田"></li>
                    <li><input class="firstName" type="text" name="firstName" placeholder="太郎"></li>
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
                    <li><input class="lastName" type="text" name="lastNameKana" placeholder="(例) やまだ"></li>
                    <li><input class="firstName" type="text" name="firstNameKana" placeholder="たろう"></li>
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
                  <input type="text" name="zipcode" placeholder="(例) 100-2000">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>住所</p>
                </div>
                <div class="input-right">
                  <input type="text" name="adress" placeholder="(例) 東京都中央区日本橋1-1-1">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>電話番号</p>
                </div>
                <div class="input-right">
                  <input type="text" name="phone" placeholder="(例) 090-1234-5678">
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>メールアドレス</p>
                </div>
                <div class="input-right">
                  <input type="email" name="email" placeholder="(例) yoyaku@gmail.com">
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
                    <input class="representative-checkbox" type="checkbox" name="representativeStay" id="representativeCheckbox" checked>
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
                        <li><input class="lastName" type="text" name="representativeLastName" placeholder="(例) 山田"></li>
                        <li><input class="firstName" type="text" name="representativeFirstName" placeholder="太郎"></li>
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
                        <li><input class="lastName" type="text" name="representativeLastNameKana" placeholder="(例) やまだ"></li>
                        <li><input class="firstName" type="text" name="representativeFirstNameKana" placeholder="たろう"></li>
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
                      <input type="text" name="representativeZipcode" placeholder="(例) 100-2000">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>住所</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="representativeAdress" placeholder="(例) 東京都中央区日本橋1-1-1">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>電話番号</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="representativePhone" placeholder="(例) 090-1234-5678">
                    </div>
                    <div class="clear"></div>
                  </div>
                </div><!-- representativeForm -->
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>チェックイン予定時刻</p>
                </div>
                <div class="input-right">
                  <select class="checkin-time" name="checkIn">
                    <?php
                      $checkInTime = array('15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00');
                      $i = 0;

                      foreach ($checkInTime as $time) {
                        echo "<option value='{$time}'>{$time}</option>";
                        $i++;
                      }
                    ?>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
              <div class="input-area">
                <div class="input-left">
                  <span>必須</span>
                  <p>交通手段</p>
                </div>
                <div class="input-right">
                  <label>
                    <input type="radio" name="transportation" value="車" id="car" class="transportation" checked>
                    <span class="transportation-message">車</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="オートバイ" id="motorcycle" class="transportation">
                    <span class="transportation-message">オートバイ</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="電車" id="train" class="transportation">
                    <span class="transportation-message">電車</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="バス" id="bus" class="transportation">
                    <span class="transportation-message">バス</span>
                  </label>
                  <label>
                    <input type="radio" name="transportation" value="その他" id="other" class="transportation">
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
                      <?php
                        for ($i = 0; $i <= 10; $i++) {
                          echo "<option value='{$i}'>{$i}</option>";
                        }
                      ?>
                    </select> 名</p>
                  </div>
                  <div class="input-mrs">
                    <p>女性：<select class="num-mrs" name="guestNumMrs">
                      <?php
                        for ($i = 0; $i <= 10; $i++) {
                          echo "<option value='{$i}'>{$i}</option>";
                        }
                      ?>
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
                  <textarea name="contact" rows="6" cols="30" placeholder="※食材の苦手やアレルギーをお持ちの方、記念日・特別な予約の方、駅からの送迎希望、その他施設への質問がある方はこちらにご記入をお願いします。"></textarea>
                  <div class="count-text">
                    <span class="count-text-color" id="countUp">0</span>
                    <span class="count-text-color">/ 300文字</span>
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
                      <input type="text" name="paymentNum">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="input-area">
                    <div class="input-left">
                      <span>必須</span>
                      <p>セキュリティーコード</p>
                    </div>
                    <div class="input-right">
                      <input type="text" name="paymentSecur" id="securityCode">
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
                        <option value="--">月</option>
                          <?php
                            for ($i = 1; $i <= 12; $i++) {
                              echo "<option value='{$i}'>{$i}</option>";
                            }
                          ?>
                      </select>
                      <select class="expiration-date" name="paymentYear">
                        <option value="--">年</option>
                          <?php
                            for ($i = 2018; $i <= 2038; $i++) {
                              echo "<option value='{$i}'>{$i}</option>";
                            }
                          ?>
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
        <p>一部の地域では、入湯税や宿泊税などの税金が発生する場合がございます。詳細は宿泊施設へ直接ご確認の上、ご予約くださいませ。</p>
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
  <script type="text/javascript" src="js/reserve.js"></script>
</body>
</html>
