<?php
    include 'simpleCart.js';

    $to      = 'saega.shop@gmail.com';
    $subject = 'Saega Shop Nota';
    $jcitems = $_POST['jcitems'] .
               " \n SUMMA: " . $_POST['jctotal'] .
               " \n\n Namn: " . $_POST['namn'] .
               " \n Telefon: " . $_POST['telefon'] .

               " \n\n IP: " . $_SERVER['REMOTE_ADDR'] .
               " \n Datum: " . date("Y-m-d") .
               " \n Tid: " . date("H:i:s") ;

    $headers = 'From: saega.shop@gmail.com' . "\r\n" .
               'Reply-To: saega.shop@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $jcitems, $headers);
    /*Clearing the cart info after succesfull order is made*/
    setcookie ("simpleCart", "", time() - 3600);
    Header('Location: tack.html');

?>