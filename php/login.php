<?php 
include("connect.php");

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'register' : regsiterUser();break;
        case 'blah' : blah();break;
        // ...etc...
    }
}

function registerUser(userName, userPass, userImg){
   echo "bien";
// 	// Check connection
// if ($conne -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }



}

// function uploadImg(img){
// 	//subir imagen
// if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){
//     if(move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$_FILES['file']['name'])){
//         echo 'File has uploaded successfully.';
//     }else{
//         echo 'Some problem occurred, please try again.';
//     }
// }

// };



 ?>