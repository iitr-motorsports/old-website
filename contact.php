<?php>
//store the message
$name = $_POST['name'];
if($sub = " "){
	$sub = "From IITRMS Website";
}
else{
	$sub = $_POST['subject'];
}
$msg = $_POST['msg'];
$message_body = "Name: ".$_POST["name"] .'<br>'; 
$message_body .= "Email: ".$_POST["email"] .'<br>';
$message_body .= "Message: ".$_POST["msg"] .'<br>';  
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$from = $_POST['email'] ;
$headers .= 'From: ' . $from . "\r\n";
$tome ="vivekkmr2706@gmail.com";
$to ="iitrms.iitr@gmail.com";
mail($tome,$sub,$message_body,$headers);
mail($to,$sub,$message_body,$headers);
header("location:index.php");

?>