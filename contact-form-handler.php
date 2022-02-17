<?php
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $subject = $_POST['subject'];
        $message = $_POST['message']

        $mailTo ="jesse@jesseplecas.com";
        $headers = "From: ".$email;
        $txt = "You have a new email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact.html?mailsend");
    }
