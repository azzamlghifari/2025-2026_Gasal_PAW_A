<?php
require 'validate.inc';

if (validateName($_POST, 'name'))  
    echo 'Data OK!';
else 
    echo 'Data invalid!';
?>