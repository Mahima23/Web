
<?php
//**************** Including header PHPMailer and setting up SMTP connection ***************
require ("PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();    // create a new object
$mail->IsSMTP();           // enable SMTP
$mail->SMTPDebug = 1;      // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;    // authentication enabled
$mail->SMTPSecure = "ssl"; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->Username = "mahimarelan@gmail.com";
$mail->Password = "mylife@23";

//******************* Including values from the HTML code and Basic Initialization ***********************

$InputFields=true;
$Name = $_POST["Name"];     
$mail->Subject = $_POST["Subject"];
$mail->Body = $Name."  ".$_POST["Message"];
//Validate if all fields are filled 
if (($Name=="")||($mail->Subject=="")||($mail->Body=="")) 
        { 
        echo "<script type='text/javascript'>alert('All fields are required, please fill in the form again.!')</script>";
		$InputFields = false;
        }
// Validate if Email Address is valid
$mail->SetFrom = $_POST["Email"];

$mail->AddAddress("mahimarelan@gmail.com");

 if((!$mail->Send()) || (!$InputFields))
    {
	//echo "Mail Sent";
    echo "<script type='text/javascript'>alert('Mail is sent,We will get back you!')</script>";
    }
    else
    {
    echo "<script type='text/javascript'>alert('Mail is sent,We will get back you!')</script>";
    }
?>