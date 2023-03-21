<?php

if (isset($_GET['submit'])) {
    include_once 'success.php';

    $email = $_GET['email'];

    if (empty($email)) {
        header("location: success.php?singup=error");
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: success.php?singup=invalidemail");
                echo "email adres is geen geldig";
        } else {
                echo "je bent nu aangemeld voor onze niewusbrief!";
        }
    }
} else {
        header("location: success.php?singup=error");
} 

?>