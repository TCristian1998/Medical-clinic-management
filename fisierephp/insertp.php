<?php
include 'insert_pacient.php';

session_start();



#catches user/password/ etc.. submitted by html form
if(isset($_POST['nume1']))
{
	$nume = $_POST['nume1'];
}

if(isset($_POST['prenume1']))
{
$Prenume = $_POST['prenume1'];}

if(isset($_POST['cod_numeric1']))
{
$cod_numeric = $_POST['cod_numeric1'];}

if(isset($_POST['sexul']))
{
$sex = $_POST['sexul'];}

if(isset($_POST['strada']))
{
$strada = $_POST['strada'];}

if(isset($_POST['nrtel']))
{
$nrtel = $_POST['nrtel'];}



#verifica daca au fost completate campurile
if(empty($_POST['prenume1']) || empty($_POST['nume1'])|| empty($_POST['cod_numeric1'])|| empty($_POST['sexul'])|| empty($_POST['strada']) || empty($_POST['nrtel'])){
    echo "Fill all the fields!";
}else{
	
	



$query = "SELECT * FROM [tema1].[dbo].[Pacient] WHERE CNP='{$cod_numeric}'";
$result = sqlsrv_query($conn, $query);  /

#verifica daca cautarea a fost facuta

if(sqlsrv_has_rows($result) != 1){
     $query = "INSERT INTO Pacient (Nume,Prenume,Sex,CNP,Strada,NumarTelefon) VALUES ('$nume', '$Prenume','$sex','$cod_numeric','$strada','$nrtel')";
	 sqlsrv_query($conn, $query);
}
else
{
	echo "Utilizator deja existent";
}

#checks if the search brought some row and if it is one only row
		
}

?>