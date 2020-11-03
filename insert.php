<?php
$hostname = "localhost";
$dbname = "db";
$username = "postgres";
$pass = "neha@9011";

$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");
$error = '';
$name = '';
$email = '';

$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }

 if(empty($_POST["message"]))
 {
	 
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 
}

if($error == '')
 {
	
    
    $query = pg_query($db_conn, "INSERT  INTO sketch(first_name, email ,msg) VALUES ('$name','$email','$message');");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }

   }
?>