<?php
session_start();
$_SESSION["nama"] = isset($_POST["nama"]) ? $_POST["nama"] : "nama kosong";
$_SESSION["umur"] = isset($_POST["umur"]) ? $_POST["umur"] : "umur kosong";
$_SESSION["tempat_lahir"] = isset($_POST["tempat_lahir"]) ? $_POST["tempat_lahir"] : "tempat lahir kosong";
$_SESSION["tanggal_lahir"] = isset($_POST["tanggal_lahir"]) ? $_POST["tanggal_lahir"] : "tanggal lahir kosong";

echo '
<h1>DATA YANG ANDA MASUKKAN</h1>
<table>
        <tr>
            <th colspan="3">Data Diri Saya</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>' . $_SESSION["nama"] . '</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>' . $_SESSION["umur"] . '</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>' . $_SESSION["tempat_lahir"] . '</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>' . $_SESSION["tanggal_lahir"] . '</td>
        </tr>
    </table>
';

echo '<a href="input.php">Kembali</a>';