<?php

session_start ();
include './../contact.php';
$name = trim(($_REQUEST["name"])); 
$email =  trim(($_REQUEST["email"]));
$mobile = trim(($_REQUEST["mobile"])); 
$password =  trim(($_REQUEST["password"]));  
$message =  trim(($_REQUEST["message"]));  
$errors =[];



//name
if (empty($name)){
    $errors['name_error'] = "Name is required";
    }
    else{
        if(strlen($name) > 50){
            $errors['name_error'] = "komai lekh";
        }
    }
    



//email
    
if(empty(filter_var($email,FILTER_VALIDATE_EMAIL))){
        $errors["email_error"] = "email is required";
       
       }else{
       if(strlen($email) > 100){
           $errors['email_error'] = "komai lekh";
       }
       }

       

       
//phone

    //    if (empty($mobile)){
    //     $errors['mobile_error'] = "mobile is required";
    //     }
    //     else{
    //         if(strlen($mobile) > 13){
    //             $errors['mobile_error'] = "11 digit lagbe";
    //         }
         
    //         elseif(!preg_match("/^(?:\+88|88)?(01[3-9]\d{8})$/",($mobile))){
    //             $errors['mobile_error'] = "invalid";
    //         }
    //     }


    if (empty($mobile)){
        $errors["mobile_error"]= "mobile is number.";
     } else if (!is_numeric($mobile)){
           $errors["mobile_error"]= "plz enter a number.";
     }else{
        if(!preg_match('/^[0-9]{11}+$/', $mobile)){
            $errors["mobile_error"]= "Invalid number";
        }
     }
    






//password

// if(empty($password) ) {
//              $errors ['password_error']="password is required";
//              }

//     elseif (strlen($password) < 8) {
//         $errors["password_error"]= "Your Password Must Contain At Least 8 Characters!";
//     }
    
//     elseif(!preg_match("#[0-9]+#",$password)) {
//         $errors["password_error"]= "Your Password Must Contain At Least 1 Number!";
//     }elseif(!preg_match("#[A-Z]+#",$password)) {
//         $errors["password_error"]= "Your Password Must Contain At Least 1 Capital Letter!";
//     }elseif(!preg_match("#[a-z]+#",$password)) {
//         $errors["password_error"]= "Your Password Must Contain At Least 1 Lowercase Letter!";
//     }
// else{
//     $errors["password_error"]= "password no match.";
// }







     
                 if (empty($password)) {
                    $errors ['password_error']="password is required";
             
            
             }
                else{
                     if(strlen($password) < 8) {
                    $errors ['password_error'] ="must be 8 digit";}}
             
            
// $password="my great password";
// filter_var($password ,
// FILTER_VALIDATE_REGEXP, 
// array("option"=> array("regexp"=>"/.{6,25}/"))
//             );





           
            


//message

    if (empty($message)){
    $errors['message_error'] = "message is required";
    }
    else{
        if(strlen($message) > 100){
            $errors['message_error'] = "komai lekh";
        }
    }
    



        if(count($errors) > 0){
            $_SESSION = $errors;
            header('Location: ../create.php'); 
        
        }else{
            
          
   $query = "INSERT INTO datas( name, mobile, email, password, message) VALUES ('$name','$mobile','$email','$password','$message')";
          

    mysqli_query($conn,$query);
    if($result){
        $_SESSION['msg']="contact info has been inserted successfully";
        header("Location: ./../create.php");
        }else{
            $_SESSION['msg']="Something Wrong.";
        header("Location: ./../create.php");
        }

 }
    
       
?>










