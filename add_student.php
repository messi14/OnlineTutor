<?php
include('db.php');

/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['first_name'], $_POST['last_name'], $_POST['contact']))
{
    $message = 'Please enter a valid name and contact';
}
/*** check the username is the correct length ***/
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    
    $contact = filter_var($_POST['contact'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    //$phpro_password = sha1( $phpro_password );

    try
    {

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = "INSERT INTO `students`(`student_first_name`, `student_last_name`, 
        	`student_contact`) VALUES ('".$first_name."', '".$last_name."', '".$contact."')";

        /*** bind the parameters ***/
        //$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        //$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
		//$stmt->bindParam(':contact', $contact, PDO::PARAM_STR);

        $dbh->exec($stmt);
    header("Location: student_info.php");
                exit;


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>
<html>
<head>
<title>PHPRO Login</title>
</head>
<body>
<p>
</body>
</html>