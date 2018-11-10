<div class="confirm-wrapper">
    <div class="container">
        <div class="form-top-notice">
            <h1>ご予約内容の最終確認と確定をお願いいたします。</h1>
        </div>
        <div class="confirm-form">
            <form action="register.ctp" method="post">
                <table>
                    <tr class="form-item">
                        <th>氏名</th>
                        <td><?= $data['familyName'] . " " . $data['givenName']; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>かな</th>
                        <td><?= $familyNameKana . " " . $givenNameKana; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>郵便番号</th>
                        <td><?= $zipcode01 . "-" . $zipcode02; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>住所</th>
                        <td><?= $prefecture . $address01 . $address02; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>電話番号</th>
                        <td><?= $tel01 . "-" . $tel02 . "-" . $tel03; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>メールアドレス</th>
                        <td><?= $email; ?></td>
                    </tr>
                    <!-- rep -->
                    <tr class="form-item">
                        <th>宿泊代表者</th>
                        <?php if ($repFamilyName != NULL && $repGivenName != NULL): ?>
                            <td><?= $repFamilyName . " " . $repGivenName; ?></td>
                        <?php else: ?>
                            <td><?= "上記の予約者と同じ"; ?></td>
                        <?php endif; ?>
                    </tr>
                    <tr class="form-item">
                        <th>かな</th>
                        <td><?= $repFamilyNameKana . " " . $repGivenNameKana; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>郵便番号</th>
                        <td><?= $repZipcode01 . " " . $repZipcode02; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>住所</th>
                        <td><?= $repPrefecture . $repAddress01 . $repAddress02; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>電話番号</th>
                        <td><?= $representativePhone; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>メールアドレス</th>
                        <td><?= $repEmail; ?></td>
                    </tr>
                    <!-- end of $rep -->
                    <tr class="form-item">
                        <th>チェックイン予定時刻</th>
                        <td><?= $checkInTime; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>人数内訳（大人）</th>
                        <td><?= '男性' . $guestNumMr . '名 / ' . '女性' . $guestNumMrs . '名'; ?></td>
                    </tr>
                    <tr class="form-item">
                        <th>ご要望など</th>
                        <td><?= $contact; ?></td>
                    </tr>
                </table>
                <input class="submit" type="submit" name="submit" value="予約を確定する">
            </form>
            <form action="input.ctp" method="post">
                <input class="back" type="submit" name="back" value="入力画面に戻る">
            </form>
        </div><!-- confirm-form -->
    </div><!-- container -->
</div><!-- confirm-wrapper -->
