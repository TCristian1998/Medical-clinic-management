<?php
include 'prima_interogare.php';
session_start();





$nume= $_SESSION["a"];
#checks if the html form is filled

	
	echo $nume;


#searches for user and password in the database

$query = "SELECT S.IdSala FROM [tema1].[dbo].[Medic] M join Sala S on M.IdSala = S.IdSala  WHERE M.Nume='{$nume}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'




#checks if the search brought some row and if it is one only row
		


?>