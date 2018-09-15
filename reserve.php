<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約｜小口旅館</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link href="css/reserve.css" rel="stylesheet">
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
              <table>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>予約者氏名</p>
                  </th>
                  <td>
                    <input class="LastName" type="text" name="lastName" placeholder="山田">
                    <input class="firstName" type="text" name="firstName" placeholder="太郎">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>ふりがな</p>
                  </th>
                  <td>
                    <input class="LastName" type="text" name="lastNameKana" placeholder="やまだ">
                    <input class="firstName" type="text" name="firstNameKana" placeholder="たろう">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>郵便番号</p>
                  </th>
                  <td>
                    <input type="text" name="postalCode" placeholder="(例) 1002000">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>住所</p>
                  </th>
                  <td>
                    <input type="text" name="adress" placeholder="(例) 東京都港区">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>メールアドレス</p>
                  </th>
                  <td>
                    <input type="email" name="email" placeholder="(例) yoyaku@gmail.com">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>電話番号</p>
                  </th>
                  <td>
                    <input type="text" name="phone" placeholder="(例) 09012345678">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>チェックイン予定時刻</p>
                  </th>
                  <td>
                    <select class="checkIn-time" name="checkIn">
                      <option value="15:00">15:00</option>
                        <?php
                          $checkInTime = array('15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00');
                          $i = 0;

                          foreach ($checkInTime as $time) {
                            echo "<option value='{$time}'>{$time}</option>";
                            $i++;
                          }
                        ?>
                    </select>
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>人数</p>
                  </th>
                  <td class="count-person">
                    <p>男性</p>
                    <select class="form-men" name="numOfMen">
                      <option value="0">0名</option>
                        <?php
                          for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='{$i}'>{$i}名</option>";
                          }
                        ?>
                    </select>
                    <p>女性</p>
                    <select class="form-women" name="numOfWomen">
                    <option value="0">0名</option>
                        <?php
                          for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='{$i}'>{$i}名</option>";
                          }
                        ?>
                    </select>
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>宿泊代表者</p>
                  </th>
                  <td>
                    <input class="check" type="checkbox" name="staying" value="" id="check-box" checked="checked">
                    <lavel for="check-box">上記の予約者と同じ</lavel>
                    <p>（代表者が異なる場合はチェックを外し、情報を入力してください。）</p>
                  </td>
                </tr>
                <tr class="form-item">
                  <th valign="top">
                    <span class="any">任意</span>
                    <p>ご要望など</p>
                  </th>
                  <td>
                    <textarea name="contact" rows="6" cols="30" placeholder="アレルギーの有無/記念日でのご利用/宿泊施設への質問など、自由にご記入下さい。"></textarea>
                    <p class="count-text">
                      <span class="count-text-color" id="">0/300</span>
                      <span class="count-text-color" id="">文字</span>
                      <br>
                    </p>
                    <p>※食材アレルギーや、記念日・特別な予約の方、駅からの送迎、その他にも施設への質問がある方はこちらにご記入をお願いします。</p>
                    <p>※内容によっては、ご希望に添えない場合もございます。</p>
                  </td>
                </tr>
              </table>
            </div><!-- reservation-info basics-wrapper -->
            <div class="reservation-info payment-wrapper">
              <h2>お支払い情報</h2>
              <table>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>カード番号</p>
                  </th>
                  <td>
                    <input type="text" name="paymentNum">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>セキュリティーコード</p>
                  </th>
                  <td>
                    <input class="security-code" type="text" name="paymenSecur">
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>有効期限</p>
                  </th>
                  <td>
                  <select class="expiration-date" name="paymentMonth">
                    <option value="--">月</option>
                      <?php
                        for ($i = 1; $i <= 12; $i++) {
                          echo "<option value='{$i}'>{$i}</option>";
                        }
                      ?>
                  </select>
                  <select class="credit expiration-date" name="paymentYear">
                    <option value="--">年</option>
                      <?php
                        for ($i = 2018; $i <= 2038; $i++) {
                          echo "<option value='{$i}'>{$i}</option>";
                        }
                      ?>
                  </select>
                  </td>
                </tr>
                <tr class="form-item">
                  <th>
                    <span>必須</span>
                    <p>カード名義</p>
                  </th>
                  <td>
                    <input class="card-name" type="text" name="paymentName">
                  </td>
                </tr>
              </table>
              <p class="card-caution">※クレジットカードの決済日は本日となります。予約キャンセル時には返金処理をいたします。</p>
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
          </div>
          <input class="submit" style="margin-top: 0px;" type="submit" name="submit" value="予約内容の最終確認へ進む">
        </form>
      </div>
    </div>
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
</body>
</html>
