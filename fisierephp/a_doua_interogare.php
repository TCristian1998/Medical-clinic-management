<?php
$serverName = "DESKTOP-VQ47I61\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tema1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));                      #Conecatare la baza de date
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Clinica Medicala</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">

  <h1>Clinica mea</h1>
  <p>O <b>clinica</b> pentru toti.</p>
</div>
<div class="row">
<div class="side">
	<a href="interogare1.php">Intoarcere</a> <br></br>
</div>
 <div class="main">
    <h2></h2>
    <br>
</body>
</html>



<?php
session_start();





$nume2= $_SESSION["b"];
#folosim session pentru a putea lua valorile din html

	
#aceasta interogare ce asistenti are un anumit medic

$query = "SELECT A.Nume,' ', A.Prenume FROM Asistent A join Medic M on M.IdMedic = A.IdMedic  WHERE M.Nume='{$nume2}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
echo 'Asistentii sub cordonarea medicului ', $nume2 ,' sunt :' ; 
echo '<br>';
while($rand = sqlsrv_fetch_array ($result)){
echo $rand['Nume'];
echo ' ';
echo $rand['Prenume'];
echo '<br>';
}


#checks if the search brought some row and if it is one only row
		


?>
