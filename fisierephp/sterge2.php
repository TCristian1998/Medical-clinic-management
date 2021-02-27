<?php
include 'delete2.php';

session_start();



#in nume pun numele echipamentului pe care vreau sa il sterg


if(isset($_POST['nume78']))
{
$nume = $_POST['nume78'];}


#verific daca am  scris in casuta din html
if(empty($_POST['nume78'])){

}else{
	
	



$query = "SELECT * FROM [tema1].[dbo].[Echipamente] WHERE NumeEchipament='{$nume}'";
$result = sqlsrv_query($conn, $query);  

# verific daca exista echipamentul pe care doresc sa il sterg  

if(sqlsrv_has_rows($result) == 1){
     $query = "DELETE FROM Echipamente WHERE NumeEchipament =  '$nume'";
	 
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Echipamentul nu exista";
}

#checks if the search brought some row and if it is one only row
		
}

?>