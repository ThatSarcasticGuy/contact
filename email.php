<?php

$emailTo="vibhorvimal5598@gmail.com";
$subject="I hope this works";
$body="I think you're great";
$headers="From:ishuvimal5598@gmail.com";

if(mail($emailTo,$subject,$body,$headers))
{
echo"The email was sent successfully";
}
else{
echo "The email could not be sent";
}

?>