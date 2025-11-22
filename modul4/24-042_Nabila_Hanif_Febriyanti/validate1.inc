<?php
// Fungsi untuk memvalidasi field 'surname'
function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z'-]+$/"; // hanya huruf, apostrof, dan tanda hubung

    // Jika field tidak diisi
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'required';
    }
    // Jika format tidak sesuai pola
    elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'invalid';
    }
}

// Fungsi untuk menampilkan error di dekat field
function showError(&$errors, $field_name)
{
    if (isset($errors[$field_name])) {
        echo '<span style="color: red; font-size: 0.9em;">' . $errors[$field_name] . '</span>';
    }
}
?>