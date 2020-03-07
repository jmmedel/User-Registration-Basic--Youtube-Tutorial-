<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password =  password_hash($_POST['password'],PASSWORD_DEFAULT) ; 

    //SQL querty

}else{
    echo("No DAta");
}
