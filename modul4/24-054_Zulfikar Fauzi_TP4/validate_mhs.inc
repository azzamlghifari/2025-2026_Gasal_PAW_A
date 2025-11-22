<?php
// === FUNGSI VALIDASI DATA MAHASISWA ===

function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z\s'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Nama wajib diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Nama hanya boleh huruf dan spasi';
    }
}

function validateNIM(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'NIM wajib diisi';
    } elseif (!preg_match("/^[0-9]{8,12}$/", $field_list[$field_name])) {
        $errors[$field_name] = 'NIM harus angka (8–12 digit)';
    }
}

function validateEmail(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Email wajib diisi';
    } elseif (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'Format email tidak valid';
    }
}

function validateProdi(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Program studi wajib diisi';
    }
}

function validateIPK(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'IPK wajib diisi';
    } elseif (!is_numeric($field_list[$field_name])) {
        $errors[$field_name] = 'IPK harus berupa angka';
    } elseif ($field_list[$field_name] < 0 || $field_list[$field_name] > 4.0) {
        $errors[$field_name] = 'IPK harus antara 0.00 - 4.00';
    }
}
?>