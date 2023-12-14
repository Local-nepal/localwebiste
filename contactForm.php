<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

   
            mail("anuptwri007@gmail.com","anup",$message,"From: $name < $email>");
    
    

?>