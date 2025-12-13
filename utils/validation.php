<?php
$error ='';
$success = '';

function requiredInput($value){
    $str = trim($value);
    if (strlen($str) > 0) {
        return true;
    }
    return false;
}
function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

function santString($value){
    $str = trim($value);
    $str = filter_var($str,FILTER_SANITIZE_SPECIAL_CHARS);
    return $str;
}

function minInput($value,$min)
{
    if(strlen($value) < $min)
    {
        return false;
    }
    return true;
}

function santsemail($email){
    $email = trim($email);
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}

function valideamil($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}
?>
