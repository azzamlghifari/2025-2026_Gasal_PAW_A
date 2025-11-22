<?php
// Fungsi-fungsi validasi server-side


// Validasi Nama
function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z\s'-]+$/"; // hanya huruf dan spasi
    if (empty($field_list[$field_name])) {
        $errors[$field_name] = 'Nama wajib diisi.';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Nama hanya boleh huruf dan spasi.';
    }
}

// Validasi NIM
function validateNIM(&$errors, $field_list, $field_name)
{
    if (empty($field_list[$field_name])) {
        $errors[$field_name] = 'NIM wajib diisi.';
    } elseif (!preg_match('/^[0-9]{8,}$/', $field_list[$field_name])) {
        $errors[$field_name] = 'NIM harus berupa angka (min. 8 digit).';
    }
}

// Validasi Email
function validateEmail(&$errors, $field_list, $field_name)
{
    if (empty($field_list[$field_name])) {
        $errors[$field_name] = 'Email wajib diisi.';
    } elseif (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'Format email tidak valid.';
    }
}

// Validasi Password
function validatePassword(&$errors, $field_list, $field_name)
{
    if (empty($field_list[$field_name])) {
        $errors[$field_name] = 'Password wajib diisi.';
    } elseif (strlen($field_list[$field_name]) < 6) {
        $errors[$field_name] = 'Password harus minimal 6 karakter.';
    }
}
?>
