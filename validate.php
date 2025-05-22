<?php

$valid_username = "dhriti";
$valid_password = "password";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
    echo "LOGIN SUCCESSFUL";
} else{
    echo "LOGIN FAILED";
}

?> 
