<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg']) && isset($_POST['number'])){
    $email = $_POST['email'];
    $subj = $_POST['subject'];
    $msg =  $_POST['msg'];
    $num = $_POST['number'];

    if(strlen($msg) >= 70){
        $msg = wordwrap($msg,70);
    }

    for ($x = 0; $x<$num; $x++) {
        mail($email, $subj, $msg);
    }


    }
//}