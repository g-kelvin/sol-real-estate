<?php 

$mail->Host     = "mail.shabachgardens.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@shabachgardens.com";  // SMTP username
$mail->Password = "shabach@2021"; // SMTP password
$mail->From     = "info@shabachgardens.com"; // it must be a match with SMTP username
$mail->Fromname = "my Company Name"; // from name
$mail->AddAddress("info@shabachgardens.com","my Company Name"); // SMTP username , Name Surname
                                                                                
    
  ?>