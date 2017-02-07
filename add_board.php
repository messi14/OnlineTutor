<?php
include('db.php');

/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['name'], $_POST['desc']))
{
    $message = 'Please enter a valid name and desc';
}
/*** check the username is the correct length ***/
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
    
    try
    {

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = "INSERT INTO `boards`(`board_name`, `board_desc`) 
        VALUES ('".$name."', '".$desc."')";

        /*** bind the parameters ***/
        //$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        //$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
		//$stmt->bindParam(':contact', $contact, PDO::PARAM_STR);

        $dbh->exec($stmt);
    header("Location: board_info.php");
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