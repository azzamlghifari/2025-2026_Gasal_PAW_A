<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-
scale=1.0"> 
  <title>Person Detail</title> 
  <style> 
    * { 
      font-family: Helvetica; 
    } 
 
    fieldset { 
      width: 320px; 
      display: flex; 
      flex-direction: column; 
      row-gap: 16px; 
      background-color: lightsteelblue; 
    } 
 
    .form_field { 
      display: flex; 
      flex-direction: column; 
      row-gap: 4px; 
    } 
  </style> 
</head> 
<body> 
  <h1>Register</h1> 
  <?php
  $errors = array();
  if (isset($_POST['surname'])) {
    require 'validate.inc';
    validateName($errors, $_POST, 'surname');
    if ($errors) {
      echo '<h1>Invalid, correct the following errors:</h1>';
      foreach ($errors as $field => $error)
        echo "$field $error</br>";
      // tampilkan kembali form  
      include 'form.inc';
    } else {
      echo 'Form submitted successfully with no errors';
    }
  } else
    // tampilkan kembali form  
    include 'form.inc';
  ?>
</body> 
</html>