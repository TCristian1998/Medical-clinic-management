<?php

include 'interogare1.php';
session_start();

echo 'ASADSFD'

#catches user/password submitted by html form
if(isset($_POST['nume5']))
{
	$nume = $_POST['nume5'];
	$_SESSION["a"] =  $_POST['nume5'];
}



#checks if the html form is filled



#searches for user and password in the database




#checks if the search brought some row and if it is one only row


?>