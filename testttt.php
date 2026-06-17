<?php
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$sent = mail("rwpttech@gmail.com","My subject",$msg);





if($sent){
    echo 'ok';
}else{
    echo 'not ok';
}
?>