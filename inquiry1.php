<?php 
session_start();
         
if((isset($_POST["name"]) && $_POST["name"] !='') && (isset($_POST["email"]) && $_POST["email"] !='') && (isset($_POST["phone"]) && $_POST["phone"] !='') && (isset($_POST["message"]) && $_POST["message"] !=''))
{
$name=$_POST["name"];	
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$_SESSION['name']=$name;

 
 $to = "gauravsaini041990@gmail.com";
 $subject = "Contact Enquiry form www.signatureglobalpark.site";
 $txt='Hi Enquiry From Contact Enquiry  !<br /><br />'.ucfirst($name).' has sent you a message via contact form on your website! <br /><br />
 Name: '.ucfirst($name ).'<br />
 Email: '.ucfirst( $email ).'<br />
 Phone: '.ucfirst( $phone).'<br />
 Message: '.ucfirst( $message).'<br />';

 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= 'From: info@signatureglobalpark.site' . "\r\n";
 


if (mail($to,$subject,$txt,$headers))
{

 
header('Location: thanks.php');
   //echo 'Message has been sent';
exit;

}
else
{
echo "OOPS please try Again !!!";
}
}
else
{
echo "Authentication Failed";
}
                   
             



//thanks you message
  
?>