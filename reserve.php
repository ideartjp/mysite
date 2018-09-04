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
      <div class="form-title">
        <h2>予約内容入力</h2>
      </div>
      <form method="post" action="sent.php">
        <div class="form-item">氏名<span class="must">必須</span></div>
        <input class="LastName" type="text" name="name" placeholder="姓">
        <input class="firstName" type="text" name="name" placeholder="名">
        <div class="form-item">かな<span class="must">必須</span></div>
        <input class="LastName" type="text" name="name" placeholder=せい>
        <input class="firstName" type="text" name="name" placeholder="めい">
        <div class="form-item">メールアドレス<span class="must">必須</span></div>
        <input type="email" name="email" placeholder="半角英数字">
        <div class="form-item">電話番号<span class="must">必須</span></div>
        <input type="text" name="phone" placeholder="半角英数字">
        <div class="form-item">郵便番号<span class="must">必須</span></div>
        <input type="text" name="postalCode" placeholder="半角英数字（- ハイフンあり）">
        <div class="form-item">住所<span class="must">必須</span></div>
        <input type="text" name="adress" placeholder="数字のみ半角英数字">
        <div class="form-item">チェックイン時間<span class="must">必須</span></div>
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
        <div class="form-item">人数<span class="must">必須</span></div>
        <select name="people">
          <option value="未選択">選択してください</option>
          <option value="1名">1名</option>
          <option value="2名">2名</option>
          <option value="3名">3名</option>
          <option value="4名">4名</option>
        </select>
        <div class="form-item">宿泊代表者<span class="must">必須</span></div>
        <input class="staying" type="text" name="staying" value="上記と同じ">
        <!-- <input class="checkbox" type="checkbox" name="representative" checked> -->
        <div class="form-item">クレジットカード<span class="must">必須</span></div>
        <input class="caredit card-name" type="text" name="payment" placeholder="名義">
        <input class="caredit card-munber" type="text" name="payment" placeholder="クレジットカード番号">
        <select class="caredit card-date" name="payment">
          <option value="未選択">月</option>
            <?php
              for ($i = 1; $i <= 12; $i++) {
                echo "<option value='{$i}'>{$i}月</option>";
              }
            ?>
        </select>
        <select class="caredit card-date" name="payment">
          <option value="未選択">年</option>
            <?php
              for ($i = 2018; $i <= 2038; $i++) {
                echo "<option value='{$i}'>{$i}</option>";
              }
            ?>
        </select>
        <input class="caredit card-security" type="text" name="payment" placeholder="セキュリティコード">
        <div class="form-item">ご要望等</div>
        <textarea name="name" rows="8" cols="80"></textarea>
        <input class="submit" type="submit" name="submit" value="予約を確定する">
      </form>
    </div>
  </div>
  <footer>
    <div class="container">

    </div>
  </footer>
</body>
</html>
