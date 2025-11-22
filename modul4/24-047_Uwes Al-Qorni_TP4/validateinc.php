<?php
function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'required';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'invalid format';
    }
}

function validateEmail(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'required';
    } elseif (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'invalid email';
    }
}

function validatePassword(&$errors, $field_list, $field_name)
{
    $password = $field_list[$field_name] ?? '';
    if (empty($password)) {
        $errors[$field_name] = 'required';
    } elseif (strlen($password) < 6) {
        $errors[$field_name] = 'too short (min 6 chars)';
    }
}
?>
