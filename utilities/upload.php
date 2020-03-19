<?php 
    include_once('../utilities/dbconnect.php');

    $name = $_FILES['avatar']['name'];
    $type = $_FILES['avatar']['type'];
    $size = $_FILES['avatar']['size'];

    if(checkType($type) && checkSize($size)){
        if(upload($_FILES['avatar'])){
            $avatar_path = "uploads/".$name;
        }else{
            echo "Failed";
        }
    }else{
        echo "Invalid File";
    }

    function checkType($type = null){
        $allowed = array('png','jpg','jpeg','gif','mp3');

        if($type){
            $strArray = explode('/', $type);
            return in_array(end($strArray), $allowed);
        }
    }

    function checkSize($size = null){
        $max = 5000000; // 5gb
        if($size){
            return $size <= $max;
        }
    }

    function upload($file = null){
        if($file){
            $avatar = $file['tmp_name'];
            $destination = "../uploads/".basename($file['name']);
            return move_uploaded_file($avatar, $destination);
        }        
    }
    ?>