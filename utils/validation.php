<?php
$error ='';
$success = '';

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

?>
