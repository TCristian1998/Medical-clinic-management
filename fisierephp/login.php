<?php
session_start();
include 'connection.php';


#punem numele utilizatorului si parola in user si password

if(isset($_POST['utilizator'])){
$user = $_POST['utilizator'];}
if(isset($_POST['parola'])){
$password = $_POST['parola'];}


#verificam daca campurile html au fost completate
if(empty($_POST['utilizator']) || empty($_POST['parola'])){
    echo "Fill all the fields!";
}else{

#cautam daca parola si userul sunt existenti
$query = "SELECT * FROM [tema1].[dbo].[Medic] WHERE Nume='{$user}' AND parola_cont='{$password}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'


if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#Daca s-a gasit doar o inregistrare
if(sqlsrv_has_rows($result) != 1){
       echo "User/password not found";
}else
	{
		echo "Found name\n\n";
		echo "<br><br>";
		$row = sqlsrv_fetch_array($result);
		
		$link = "menu.php";
		
		echo "<p><a href = $link > Acceseaza meniul! </a><p>";
	
			
		header("Location: register.php");
		}
		
}

?>