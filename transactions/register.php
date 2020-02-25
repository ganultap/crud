<?php
    include_once('../utilities/validation.php');
    include("../includes/template/header.php");
    include("../includes/template/footer.php");

         $firstname = $lastname = $middlename = $birthdate = $email = $gender = $course = $birthplace = $guardian = $contacts = $status = $yearlevel = $address = $schoolyear = "";
         $myArr = array();
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $firstname = test_input($_POST["firstname"]);

            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/', $firstname)) {
               $firstname = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
               array_push($myArr,1);
            }

            $lastname = test_input($_POST["lastname"]);
            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
            $lastname)) {
                $lastname = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
                array_push($myArr,1);
             }

            $middlename = test_input($_POST["middlename"]);
            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
            $middlename)) {
                $middlename = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
                array_push($myArr,1);
             }
            
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
                array_push($myArr,1);
            }

            $course = test_input($_POST["course"]);
            $gender = test_input($_POST["gender"]);
            $status = test_input($_POST["status"]);
            $yearlevel = test_input($_POST["level"]);

            $schoolyear = test_input($_POST["schoolyear"]);
            if (!preg_match("/^[0-9]{4}-[0-9]{4}/",$schoolyear)){
               $schoolyear = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
               array_push($myArr,1);
            }

            $birthdate = test_input($_POST["birthdate"]);
            if (preg_match("/(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$-^[0-9]{4}/",$birthdate)) {
               $birthdate = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
               array_push($myArr,1);
           }

            $birthplace = test_input($_POST["birthplace"]);
            if (!preg_match('/^[a-zA-Z](?!.*?[^\na-zA-Z0-9,]{2}).*?[a-zA-Z0-9]$/',
            $birthplace)) {
                $birthplace = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
                array_push($myArr,1);
             }

             $guardian = test_input($_POST["guardian"]);
             if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
             $guardian)) {
               $guardian = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
               array_push($myArr,1);
             }

             $contacts = test_input($_POST["contact"]);
             if (!preg_match('/(^(\+63)(\d){10}$)/',
             $contacts)) {
                $contacts = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
                array_push($myArr,1);
             }

             $address = test_input($_POST["address"]);
            if (!preg_match('/^[a-zA-Z](?!.*?[^\na-zA-Z0-9,]{2}).*?[a-zA-Z0-9]$/',
            $address)) {
               $address = '<span style="color:#FF5733;text-align:center;">Invalid Input</span>';
               array_push($myArr,1);
            }

            else {
                  array_push($myArr,0);
            }

            foreach ($myArr as $value) {
                if ($value == 1){
                    echo ('<span style="color:#FF5733;">Registration Failed: Invalid Input(s)</span>');
                    PHP_EOL;
                    break;
                }
                else {
                    echo ('<span style="color:#239B56;">Congratulations! Registration Successful.</span>');
                    PHP_EOL;
                }
             }
             
                echo ucwords(("<p>First Name:   $firstname</p>"));
                echo ucwords(("<p>Last Name:    $lastname</p>"));
                echo ucwords(("<p>Middle Name:  $middlename</p>"));
                echo ucwords(("<p>Address:  $address</p>"));
                $newDate = date("m-d-Y", strtotime($birthdate));
                echo ("<p>Birthday:  $newDate</p>");
                echo ucwords(("<p>Birth Place:  $birthplace</p>"));
                echo ("<p>Gender:  $gender</p>");
                echo ucwords(("<p>Guardian:  $guardian</p>"));
                echo ("<p>Contact:  $contacts</p>");
                echo ("<p>Status:  $status</p>");
                echo ("<p>Year Level:  $yearlevel</p>");
                echo ("<p>Course:  $course</p>");
                echo ("<p>School Year:  $schoolyear</p>");
                echo ("<p>Email:  $email</p>");
         }        
?>