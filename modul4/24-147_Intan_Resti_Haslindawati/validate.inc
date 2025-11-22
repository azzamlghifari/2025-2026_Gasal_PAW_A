<?php
function validateName(&$errors, $field_list, $field_name){
    $pattern = "/^[a-zA-Z'-]+$/"; //format surname(alfabet)
    if (!isset($field_list[$field_name]) ||
        empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!preg_match($pattern,$field_list[$field_name]))
        $errors[$field_name] = 'invalid';
}

function validateEmail(&$errors, $field_list, $field_name){
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL))
        $errors[$field_name] = 'invalid email format';
}

function validatePassword(&$errors, $field_list, $field_name){
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (strlen($field_list[$field_name]) < 6)
        $errors[$field_name] = 'too short (min 6 characters)';
}

?>