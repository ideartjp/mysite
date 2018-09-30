<?php
session_start();

$validFlag = true;

// ===== validation check =====
// basic
if (!isset($_SESSION['familyName']) || $_SESSION['familyName'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['givenName']) || $_SESSION['givenName'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['familyNameKana']) || $_SESSION['familyNameKana'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['givenNameKana']) || $_SESSION['givenNameKana'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['zipcode']) || $_SESSION['zipcode'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['prefecture']) || $_SESSION['prefecture'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['address']) || $_SESSION['address'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['phone']) || $_SESSION['phone'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['email']) || $_SESSION['email'] == '') {
    $validFlag = false;
}
// representative
if  (!isset($_SESSION['representativeStay']) || $_SESSION['representativeStay'] == '') {
  if (!isset($_SESSION['representativeFamilyName']) || $_SESSION['representativeFamilyName'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativeGivenName']) || $_SESSION['representativeGivenName'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativeFamilyNameKana']) || $_SESSION['representativeFamilyNameKana'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativeGivenNameKana']) || $_SESSION['representativeGivenNameKana'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativeZipcode']) || $_SESSION['representativeZipcode'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativePrefecture']) || $_SESSION['representativePrefecture'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativeAddress']) || $_SESSION['representativeAddress'] == '') {
      $validFlag = false;
  }
  if (!isset($_SESSION['representativePhone']) || $_SESSION['representativePhone'] == '') {
      $validFlag = false;
  }
}
// others
if (!isset($_SESSION['checkInTime']) || $_SESSION['checkInTime'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['transportation']) || $_SESSION['transportation'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['guestNumMr']) || $_SESSION['guestNumMr'] == '') {
    $validFlag = false;
}
if (!isset($_SESSION['guestNumMrs']) || $_SESSION['guestNumMrs'] == '') {
    $validFlag = false;
}
// $validFlag == false
if ($validFlag == false) {
    header("location: reserve.php");
    exit();
}

// ===== $_POST =====
// basic
$familyName     = $_SESSION['familyName'];
$givenName      = $_SESSION['givenName'];
$familyNameKana = $_SESSION['familyNameKana'];
$givenNameKana  = $_SESSION['givenNameKana'];
$zipcode        = $_SESSION['zipcode'];
$prefecture     = $_SESSION['prefecture'];
$address        = $_SESSION['address'];
$phone          = $_SESSION['phone'];
$email          = $_SESSION['email'];
// representative
$representativeStay           = $_SESSION['representativeStay'];
$representativeFamilyName     = $_SESSION['representativeFamilyName'];
$representativeGivenName      = $_SESSION['representativeGivenName'];
$representativeFamilyNameKana = $_SESSION['representativeFamilyNameKana'];
$representativeGivenNameKana  = $_SESSION['representativeGivenNameKana'];
$representativeZipcode        = $_SESSION['representativeZipcode'];
$representativePrefecture     = $_SESSION['representativePrefecture'];
$representativeAddress        = $_SESSION['representativeAddress'];
$representativePhone          = $_SESSION['representativePhone'];
// $representativeEmail          = $_SESSION['representativeEmail'];

// ----------------------------------

$dsn = 'mysql:dbname=hotels_reservations;host=127.0.0.1';
$user = 'ideart';
$password = '1de@rt0117';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
    exit();
}

$sql = 'INSERT INTO users (family_name, given_name, family_name_kana, given_name_kana, zipcode, prefecture, address, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
$sth = $dbh->prepare($sql);
$sth->execute(array($familyName, $givenName, $familyNameKana, $givenNameKana, $zipcode, $prefecture, $address, $phone, $email));

if ($representativeStay != '') {
  $sql = 'INSERT INTO users (family_name, given_name, family_name_kana, given_name_kana, zipcode, prefecture, address, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($representativeFamilyName, $representativeGivenName, $representativeFamilyNameKana, $representativeGivenNameKana, $representativeZipcode, $representativePrefecture, $representativeAddress, $representativePhone, $representativeEmail));
}

// $sql = 'INSERT INTO users (family_name, given_name, family_name_kana, given_name_kana, zipcode, prefecture, address, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
// $sth = $dbh->prepare($sql);
// $sth->execute(array($familyName, $givenName, $familyNameKana, $givenNameKana, $zipcode, $prefecture, $address, $phone, $email));

header("location: complete.html");
exit();
