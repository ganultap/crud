<?php

 // check if names are empty | starts with a number, html tags and symbols
  function checkNames($str = null){
    return (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/', $str)) ? true : false;
  }

 // check if address are empty | starts with an html tags and symbols
  function checkAddress($str = null){
    return (!preg_match('/(?=.{2,26})(?=^[a-zA-Z0-9\s{1}]+$)/', $str)) ? true : false;
  }

  function checkEmail($str = null){
    return (!filter_var($str, FILTER_VALIDATE_EMAIL)) ? true : false;
  }

  function checkSchoolYear($str = null){
    return (!preg_match("/^[0-9]{4}-[0-9]{4}/", $str)) ? true : false;
  }

  function checkBirthDate($str = null){
    return (preg_match("/(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$-^[0-9]{4}/", $str)) ? true : false;
  }

  function checkContact($str = null){
    return (!preg_match('/(^(\+63)(\d){10}$)/', $str)) ? true : false;
  }

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function validate($str, $repassword = ""){
      return isEmpty($str) && checkSize($str) && passwordMatch($str, $repassword);
  }

  function isEmpty($str){
      return trim(strlen($str) > 0);
  }

  function checkSize($str){
      $min = 3;
      $max = 12;
      return strlen($str) >= $min && strlen($str) <= $max;
  }

  function passwordMatch($str, $repassword){
      return $str == $repassword;
  }
  
  function isValidPassword($str){
      return preg_match_all('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $str);
  }
?>