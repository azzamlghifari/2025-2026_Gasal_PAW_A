<?php
$errors = [];
if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    $nim = trim($_POST['nim']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $pattern = "/^[a-zA-Z'-]+$/"; // format surname (alfabet)
    if (!preg_match($pattern, $name)) {
        $errors['name'] = 'Nama hanya boleh berisi huruf dan spasi';
    }
    if(strlen($password) < 6){
        $errors['password'] = "Password minimal 6 karakter";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Format email tidak valid";
    }
    if(!is_numeric($nim)){
        $errors['nim'] = "NIM harus berupa angka";
    }
}
?>
