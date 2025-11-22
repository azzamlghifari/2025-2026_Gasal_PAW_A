<?php
$errors = [];
if(isset($_POST['surname'])){
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $pattern = "/^[a-zA-Z'-]+$/"; // format surname (alfabet)
    if (!preg_match($pattern, $surname)) {
        $errors['surname'] = 'Surname hanya boleh berisi huruf dan spasi';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Format email tidak valid";
    }
    if(strlen($password) < 6){
        $errors['password'] = "Password minimal 6 karakter";
    }
}
?>
