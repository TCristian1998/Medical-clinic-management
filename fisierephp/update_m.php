<?php
include 'modifica_medic.php';

session_start();



#catches user/password submitted by html form
if(isset($_POST['id1']))
{
	$id = $_POST['id1'];
}



if(isset($_POST['salariu1']))
{
$salariu = $_POST['salariu1'];}





#checks if the html form is filled
if(empty($_POST['salariu1'])|| empty($_POST['id1'])){
    echo "Fill all the fields!";
}else{
	
	


#searches for user and password in the database

$query = "SELECT * FROM [tema1].[dbo].[Medic] WHERE IdMedic='{$id}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#checks if the search was made

if(sqlsrv_has_rows($result) == 1){
     $query = "UPDATE Medic SET Salariu = ('$salariu') WHERE IdMedic = '$id'";
	 
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Utilizator deja existent";
}

#checks if the search brought some row and if it is one only row
		
}

?>