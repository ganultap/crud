<?php 
    include_once('../utilities/validation.php');

         $firstname = $lastname = $middlename = $birthdate = $email = $gender = $course = $birthplace = $guardian = $contacts = $status = $yearlevel = $address = $schoolyear = "";

         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $firstname = test_input($_POST["firstname"]);

            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/', $firstname)) {
               $firstname = "Invalid Input";
            }

            $lastname = test_input($_POST["lastname"]);
            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
            $lastname)) {
                $lastname = "Invalid Input";
             }

            $middlename = test_input($_POST["middlename"]);
            if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
            $middlename)) {
                $middlename = "Invalid Input";
             }
            
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = "Invalid email format";
            }

            $course = test_input($_POST["course"]);
            $gender = test_input($_POST["gender"]);
            $status = test_input($_POST["status"]);
            $yearlevel = test_input($_POST["level"]);

            $schoolyear = test_input($_POST["schoolyear"]);
            if (!preg_match("/^[0-9]{4}-[0-9]{4}/",$schoolyear)){
               $schoolyear = "Invalid Input";
            }

            $birthdate = test_input($_POST["birthdate"]);
            if (preg_match("/(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$-^[0-9]{4}/",$birthdate)) {
               $birthdate = "Birthdate is Invalid";
           }

            $birthplace = test_input($_POST["birthplace"]);
            if (!preg_match('/(?!^ +$)^.+$/',
            $birthplace)) {
                $birthplace = "Invalid Input";
             }

             $guardian = test_input($_POST["guardian"]);
             if (!preg_match('/(?=.{2,26})(?=^[a-zA-Z\s{1}]+$)/',
             $guardian)) {
               $guardian = "Invalid Input";
             }

             $contacts = test_input($_POST["contact"]);
             if (!preg_match('/(^(\+63)(\d){10}$)/',
             $contacts)) {
                $contacts = "Invalid Input";
             }

             $address = test_input($_POST["address"]);
             if (!preg_match("/(?!^ +$)^.+$/",
             $address)) {
                $address = "Invalid Input";
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