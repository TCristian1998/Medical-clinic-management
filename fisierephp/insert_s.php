<?php
include 'insert_sectie.php';

session_start();



#in variabila nume pun data culeasa din html
if(isset($_POST['nume2']))
{
	$nume = $_POST['nume2'];
}



#checks if the html form is filled
if(empty($_POST['nume2'])){
    echo "Fill all the fields!";
}else{
	
	


#cauta numele in baza de date

$query = "SELECT * FROM [tema1].[dbo].[Sectie] WHERE NumeSectie='{$nume}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#verifica daca cautararea a fost facuta

if(sqlsrv_has_rows($result) != 1){
     $query = "INSERT INTO Sectie (NumeSectie) VALUES ('$nume')";
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Sectie deja existenta";
}
		
}

?>