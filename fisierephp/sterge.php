<?php
include 'delete.php';

session_start();



#catches user/password submitted by html form


if(isset($_POST['nume73']))
{
$nume = $_POST['nume73'];}


#checks if the html form is filled
if(empty($_POST['nume73'])){
    echo "Fill all the fields!";
}else{
	
	


#searches for user and password in the database

$query = "SELECT * FROM [tema1].[dbo].[Sectie] WHERE NumeSectie='{$nume}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#checks if the search was made

if(sqlsrv_has_rows($result) == 1){
     $query = "DELETE FROM Sectie WHERE NumeSectie =  '$nume'";
	 
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Utilizator nu exista";
}

#checks if the search brought some row and if it is one only row
		
}

?>