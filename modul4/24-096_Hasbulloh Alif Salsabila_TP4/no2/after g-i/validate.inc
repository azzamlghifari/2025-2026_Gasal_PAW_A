<?php
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/";
    
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) {
        $errors[$field_name] = 'Wajib Diisi';
    } else if (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Hanya huruf dan tanda hubung yang diizinkan';
    }
}
function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) {
        $errors[$field_name] = 'Wajib Diisi';
    } else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'Email Tidak Ditemukan';
    }
}
?>