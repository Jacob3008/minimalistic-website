<?php


    if(isset($_POST['submit']))  {
        
        $to = "jsneuman2@gmail.com";
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $text = $_POST[message];
        $headers = "From: " .$email . "/r/n" .
        "CC: somebodyelse@example.com";
        
        mail($to, $subject, $message, $headers);
        
        header("Location: contact.html");
        
    }





?>