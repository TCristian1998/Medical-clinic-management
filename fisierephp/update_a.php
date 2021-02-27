<?php
include 'update_asistent.php';

session_start();



#luam datele din html si le punem in id si in salariu
if(isset($_POST['id1']))
{
	$id = $_POST['id1'];
}



if(isset($_POST['salariu1']))
{
$salariu = $_POST['salariu1'];}





#verificam daca s-au incarcat rezuultate in html
if(empty($_POST['salariu1'])|| empty($_POST['id1'])){
    echo "Fill all the fields!";
}else{
	
	


$query = "SELECT * FROM [tema1].[dbo].[Asistent] WHERE IdAsistent='{$id}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

if(sqlsrv_has_rows($result) == 1){
     $query = "UPDATE Asistent SET Salariu = ('$salariu') WHERE IdAsistent = '$id'";
	 
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Utilizator deja existent";
}

#checks if the search brought some row and if it is one only row
		
}

?>