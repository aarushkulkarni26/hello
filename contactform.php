<?php

if (isset($_POST['submit']) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['name'];

    $mailTo = 'kulkarni.poornima@gmail.com';
    $headers = 'from: '.$mailFrom;
    $txt = 'you have recived a email from '.$name.'.\n\n'.$message;

    mail($mailTo, $subject, $txt, $headers);
    header('Location: index.php?mailsend')
}