<?php
//These variable values come from your hosting account.
$hostname = "copContactUsDB.db.11243657.hostedresource.com";
$username = "copContactUsDB";
$dbname = "copContactUsDB";
//These variable values need to be changed by you before deploying
$password = "PHI@2eq1pihp";
$usertable = "copContactUs";
//$yourfield = "your_field";


$connection=mysql_connect($hostname,$username,$password) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$connection) or die("Failed to connect to MySQL: " . mysql_error());
//Inserting Record to DB
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO copContactUs(
	ContactName,
	ContactEmail,
	Message,
	ContactDateCreated
	)
	VALUES(
		'$name',
		'$email',
		'$message',
		NOW()
	)";
$result=mysql_query($query,$connection);
if($result)
	{
		;
	}
	else
	{
		die('Error: '.mysql_error($connection));
	}
	mysql_close($connection);

/*SENDING MAIL TO ME*/
if(isset($_POST['submit'])){
    $to = "jsinghdrdo@gmail.com"; // this is your Email address
    $from = $email; // this is the sender's Email address
    $subject = "Query from www.concepts-of-physics.com";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location:thankyou.html');		
 //   mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
 //   echo "Thank you " . $name . ", we will update you shortly.";
    // You can also use header('Location: thankyou.php'); to redirect to another page.
    }
/*INSERTING DATA TO THE DATABASE*/
?>

