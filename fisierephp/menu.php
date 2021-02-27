<?php
$serverName = "DESKTOP-VQ47I61\SQLEXPRESS"; //Conectarea la baza de date
$connectionInfo = array( "Database"=>"tema1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexiunea s-a realizat.<br />";
}else{
     echo "Conexiunea nu s-a realizat.<br />";
     die( print_r( sqlsrv_errors(), true));
}



#prin href am realizat conexiunea intre fisiere
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
<h2>Ce operatie doriti?</h2>




<a href="insertp.php">Adauga Pacient</a> <br></br>  
<a href="sterge.php">Sterge Sectie</a><br></br>
<a href="sterge2.php">Sterge Echipament</a><br></br>
<a href="insert_s.php">Adauga Sectie</a> <br></br>
<a href="update_m.php">Modifica salariu Medic</a> <br></br>
<a href="update_a.php">Modifica salariu Asistent</a> <br></br>
<a href="interogare1.php">Informatii despre medic</a> <br></br>
<a href="interogare2.php">Informatii despre pacienti</a> <br></br>
<a href="interogarecomplexa.php">Informatii salarii Medici/Asistenti</a> <br></br>
</div>
 <div class="main">
    <h2></h2>
     <div> <img src="pacient.jpg" alt="Doctor" width="800" height="400"></div>
    <br>

</body>
</html>
