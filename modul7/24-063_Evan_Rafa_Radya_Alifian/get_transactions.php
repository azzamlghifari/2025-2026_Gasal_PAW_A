<?php

require_once "./config.php";

$transactions;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $startDate = $_POST["start_date"] ?? null;
  $endDate = $_POST["end_date"] ?? null;


  if (!$startDate && !$endDate) {
    $sqlGetTransaction = "
      SElECT * FROM transaksi AS t
      JOIN pelanggan AS p ON (t.pelanggan_id = p.id);
    ";
    $sqlGetTotalCustomers = "
      SElECT COUNT(DISTINCT pelanggan_id) AS customers FROM transaksi AS t
      JOIN pelanggan AS p ON (t.pelanggan_id = p.id);
    ";
    $sqlGetTotalSum = "
      SElECT SUM(total) AS total_sum FROM transaksi AS t;
    ";
  } else {
    $sqlGetTransaction = "
      SElECT * FROM transaksi AS t
      JOIN pelanggan AS p ON (t.pelanggan_id = p.id)
      WHERE t.waktu_transaksi >= '$startDate' AND t.waktu_transaksi <= '$endDate';
    ";
    $sqlGetTotalCustomers = "
      SElECT COUNT(DISTINCT pelanggan_id) AS customers FROM transaksi AS t
      WHERE t.waktu_transaksi >= '$startDate' AND t.waktu_transaksi <= '$endDate';
    ";
    $sqlGetTotalSum = "
      SElECT SUM(total) AS total_sum FROM transaksi AS t
      WHERE t.waktu_transaksi >= '$startDate' AND t.waktu_transaksi <= '$endDate';
    ";
  }

  $t_res = mysqli_query($connDB, $sqlGetTransaction);
  $transactions = mysqli_fetch_all($t_res, MYSQLI_ASSOC);
  
  $c_res = mysqli_query($connDB, $sqlGetTotalCustomers);
  $customers = mysqli_fetch_row($c_res)[0];

  $ts_res = mysqli_query($connDB, $sqlGetTotalSum);
  $totalSum = mysqli_fetch_row($ts_res)[0];


  $_SESSION["customers"] = $customers;
  $_SESSION["totalSum"] = $totalSum;
  $_SESSION["transactions"] = $transactions;
  $_SESSION["terms"] = [];
  $_SESSION["total"] = [];
  foreach ($transactions as $transaction) {
    $_SESSION["terms"][] = $transaction["waktu_transaksi"];
    $_SESSION["total"][] = $transaction["total"];
  }
  mysqli_close($connDB);
  header("Location: ./index.php");
  exit;
}