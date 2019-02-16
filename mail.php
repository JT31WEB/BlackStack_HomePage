<?php
    $to = 'tjsepale@gmail.co.za';
    $firstname = $_POST["contactName"];
    $email= $_POST["contactEmail"];
    $text= $_POST["contactComment"];
    $visitor = $_POST["contact"];
    $reply = $_POST["reply"];
    foreach ($_POST["interest"] as $interest) {
         echo $interest . ", ";
     }
     function escapeData($data){
        if(function_exists('mysql_real_escape_stringunescaped_string')){
            $data = mysql_real_escape_string($data);
            $data = strip_tags($data);
        } else {
            $data = mysql_escape_string($data);
            $data = strip_tags($data);
        }
        return $data;
     }


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Interest(s): '.$interest.'</td></tr>
        <tr><td>Reply: '.$reply.'</td></tr>
        <tr><td>visitor: '.$visitor.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'FORM NOT SENT!<br>';
    }

?>
