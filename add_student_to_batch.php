<?php
include('db.php');

/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['id'], $_POST['student_ids']))
{
    $message = 'Please enter a valid batch ID';
}
/*** check the username is the correct length ***/
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $id = $_POST['id'];
    $ids = $_POST['student_ids'];

    $sid = explode(",", $ids);

   for ($x = 0; $x < count($sid)-1; $x++) {
        
    try
    {

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = "INSERT INTO `student_batch` ( `student_id`, `batch_id`) VALUES (".$sid[$x].",".$id.")";

        /*** bind the parameters ***/
        //$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        //$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        //$stmt->bindParam(':contact', $contact, PDO::PARAM_STR);

        $dbh->exec($stmt);
    

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }



} 
    //echo $fn;
    /*** now we can encrypt the password ***/
    //$phpro_password = sha1( $phpro_password );
                header("Location: batch_info.php?id=".$id);
                exit;

    
}
?>
<html>
<head>
<title>PHPRO Login</title>
</head>
<body>
<p><?php echo $message ?>
</body>
</html>