<?php
include('db.php');

/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['name'], $_GET['board_id']))
{
    $message = 'Please enter a valid name and desc';
}
/*** check the username is the correct length ***/
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $board_id = $_GET['board_id'];
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
     
    try
    {

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = "INSERT INTO `classes`(`class_name`, `board_id`) 
        VALUES ('".$name."', '".$board_id."')";

        /*** bind the parameters ***/
        //$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        //$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
		//$stmt->bindParam(':contact', $contact, PDO::PARAM_STR);

        $dbh->exec($stmt);
    header("Location: board_page.php?id=".$board_id);
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