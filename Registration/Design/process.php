<?php
require_once('config.php');
?>

<?php

if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: https://kagayajohn.com');
}


if(isset($_POST)){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password =  password_hash($_POST['password'],PASSWORD_DEFAULT) ; 

    //SQL querty
    $sql = "INSERT into users(firstname, lastname,email,phonenumber,password) VALUES(?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $result = $stminsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);

    if($result){
        echo('SucessFully Saved');
    }else{
        echo("There where errors while saving to the database");
    }

}else{
    echo("No DAta");
}
