<?php
function validateNIM(&$errors, $field_list, $field_name)
{
    $pattern = "/^[0-9]{8,12}$/";
    if (empty(trim($field_list[$field_name] ?? ''))) {
        $errors[$field_name] = 'NIM wajib diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'NIM harus berupa angka 8–12 digit';
    }
}

function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z ]+$/";
    if (empty(trim($field_list[$field_name] ?? ''))) {
        $errors[$field_name] = 'Nama wajib diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Nama hanya boleh berisi huruf dan spasi';
    }
}

function validateEmail(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    if (empty(trim($field_list[$field_name] ?? ''))) {
        $errors[$field_name] = 'Email wajib diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Format email tidak valid';
    }
}

function validatePassword(&$errors, $field_list, $field_name)
{
    $password = trim($field_list[$field_name] ?? '');
    if (empty($password)) {
        $errors[$field_name] = 'Password wajib diisi';
    } elseif (strlen($password) < 6) {
        $errors[$field_name] = 'Password minimal 6 karakter';
    }
}
?>
