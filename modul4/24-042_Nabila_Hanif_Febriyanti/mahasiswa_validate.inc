<?php
// validasi nama
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/"; 
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
        $errors[$field_name] = 'Nama wajib diisi';
    }
    //jika nama tidak sesuai
    else if (!preg_match($pattern, $field_list[$field_name])){
        $errors[$field_name] = 'Format nama tidak valid';
    }
}

// validasi email
function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) {
        $errors[$field_name] = 'Email wajib diisi';
    } 
    // jika email tidak sesuai
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) { 
        $errors[$field_name] = 'Format email tidak valid';
    }
    // jika tidak sesuai pola yang benar
    else if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $field_list[$field_name])) {
        $errors[$field_name] = "Email tidak sesuai pola yang benar!";
    }
}

// validasi password
function validatePassword(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) {
        $errors[$field_name] = 'Password wajib diisi';
    } 
    // jika password kurang dari 8 karakter
    else if (strlen($field_list[$field_name]) < 8) { 
        $errors[$field_name] = 'Password minimal 8 karakter';
    }
}

// menampilkan pesan error
function showError(&$errors, $field_name) {
    if (isset($errors[$field_name])) {
        echo '<span style="color: red; font-size: 0.9em;">' . $errors[$field_name] . '</span>';
    }
}

// menampilkan nilai inputan sebelumnya
function showValue($field_name) {
    if (isset($_POST[$field_name])) {
        echo htmlspecialchars($_POST[$field_name]); //
    }
}
?>