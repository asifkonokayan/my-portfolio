<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    echo "Message sent successfully!";
}
?>