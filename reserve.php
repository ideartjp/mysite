<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ご予約｜小口旅館</title>
  <link href="css/reserve.css" rel="stylesheet">
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
          <h2>予約内容入力</h2>
        </div>
        <form action="confirm.php" method="post">
          <table>
            <tr class="form-item">
              <th>
                <p>氏名</p>
                <span>必須</span>
              </th>
              <td>
                <input class="LastName" type="text" name="lastName" placeholder="姓">
                <input class="firstName" type="text" name="firstName" placeholder="名">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>かな</p>
                <span>必須</span>
              </th>
              <td>
                <input class="LastName" type="text" name="lastNameKana" placeholder=せい>
                <input class="firstName" type="text" name="firstNameKana" placeholder="めい">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>メールアドレス</p>
                <span>必須</span>
              </th>
              <td>
                <input type="email" name="email" placeholder="半角英数字">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>電話番号</p>
                <span>必須</span>
              </th>
              <td>
                <input type="text" name="phone" placeholder="半角英数字">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>郵便番号</p>
                <span>必須</span>
              </th>
              <td>
                <input type="text" name="postalCode" placeholder="半角英数字（- ハイフンあり）">
              <td>
            </tr>
            <tr class="form-item">
              <th>
                <p>住所</p>
                <span>必須</span>
              </th>
              <td>
                <input type="text" name="adress" placeholder="数字のみ半角英数字">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>チェックイン時間</p>
                <span>必須</span>
              </th>
              <td>
                <select name="checkIn">
                  <option value="未選択">選択してください</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                </select>
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>人数</p>
                <span>必須</span>
              </th>
              <td>
                <select class="men" name="numOfMen">
                  <option value="未選択">男性</option>
                    <?php
                      for ($i = 1; $i <= 7; $i++) {
                        echo "<option value='{$i}'>{$i}名</option>";
                      }
                    ?>
                </select>
                <select class="women" name="numOfWomen">
                  <option value="未選択">女性</option>
                    <?php
                      for ($i = 1; $i <= 7; $i++) {
                        echo "<option value='{$i}'>{$i}名</option>";
                      }
                    ?>
                </select>
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>宿泊代表者</p>
                <span>必須</span>
              </th>
              <td>
                <input class="who-stay" type="text" name="staying" value="上記と同じ">
                <!-- <input class="checkbox" type="checkbox" name="representative" checked> -->
              </td>
            </tr>
            <tr class="form-item">
              <th valign="top">
                <p>お支払い情報</p>
                <span>必須</span>
              </th>
              <td>
                <input class="credit card-name" type="text" name="paymentName" placeholder="クレジットカード名義">
                <input class="credit card-munber" type="text" name="paymentNum" placeholder="クレジットカード番号">
                <select class="credit expiration-date" name="paymentMonth">
                  <option value="未選択">月</option>
                    <?php
                      for ($i = 1; $i <= 12; $i++) {
                        echo "<option value='{$i}'>{$i}月</option>";
                      }
                    ?>
                </select>
                <select class="credit expiration-date" name="paymentYear">
                  <option value="未選択">年</option>
                    <?php
                      for ($i = 2018; $i <= 2038; $i++) {
                        echo "<option value='{$i}'>{$i}</option>";
                      }
                    ?>
                </select>
                <input class="credit card-security" type="text" name="paymenSecur" placeholder="セキュリティコード">
              </td>
            </tr>
            <tr class="form-item">
              <th>
                <p>ご要望など</p>
                <span class="any">任意</span>
              </th>
              <td>
                <textarea name="contact" rows="8" cols="80"></textarea>
              </td>
            </tr>
          </table>
          <input class="submit" type="submit" name="submit" value="予約内容を確認する">
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
