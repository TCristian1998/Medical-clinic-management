# Medical-clinic-management


**Tataru George-Cristian** 

**Gestiune consultatii la o clinica medicala** 

**Descrierea aplicatiei** 

Prin aceasta aplicatie am simulat baza de date a unei clinici medicale.  

In  aceasta  baza  de  date  au  acces  doar  medicii,  acestia  fiind  persoanele autorizate care pot efectua modificari in tabele, adaugari/inscrieri de pacienti sau pot sterge  anumite  informatii.  De  asemenea,  in  functie  de  necesitati  pot  efectua interogari cu privire la pacienti sau cu privire la salariile asistentilor. 

Clinica medicala tine evidenta fiecarui pacient care isi face anilizele. Pe langa informatiile de baza (nume, prenume, numar de telefon, CNP), clinica mai doreste si  informatii  despre  cardul  de  sanatate  (pentru  eventuale  decontari  ale  Casei Nationale de Asigurări de Sanatate), precum si despre eventuale alergii pe care le are pacientul (pentru recomandarea unor tratamente). Un pacient se poate trata la mai multi medici afiliati clinicii noastre (un pacient poate avea in acelasi timp si probleme la ureche, dar si dureri la coloana, fiind nevoit sa se duca la 2 doctori diferiti) si, de asemenea, un medic poate trata mai multi pacienti. Astfel, o sa avem nevoie de o tabela suplimentara *Medic/Pacient*. De asemenea, medicii sunt cei care controleaza activitatea clinicii de aceea, acestia vor avea o parola cu care se pot loga la baza de date. 

In cazul fiecarui medic se cunoaste numele, prenumele, id-ul, programul de lucru, salariul, sectia pentru care lucreaza si sala in care poate fi gasit. Se cunoaste ca un medic poate avea sub coordonare mai multi asistenti, ca poate fi gasit doar intr-o singura sala si ca apartine unei singure sectii. 

In cazul asistentilor se cunoaste id-ul, numele, prenumele si salariul acestuia. Unul sau mai multi asistenti pot fi sub coordonarea unui singur medic. 

In cazul tabelei *Sala* se cunoaste id-ul salii, numarul locurilor disponibile de pacienti care pot sta in sala (in cazul in care pacientii au nevoie de recuperare dupa operatie) si se stie daca se poate opera sau nu in acea sala. De asemenea, intr-o sala se pot gasi unul sau mai multe echipamente. 

In tabela *Sectie* se memoreaza doar id-ul sectiei si numele sectiei. Intr-o sectie pot fi mai multi medici, dar un medic apartine unei singure sectii. 

In tabela *Echipamente* se introduc acele echipamente de importanta ridicata (nu echipament de unica folosinta ca mastile chirurgicale). Acestea sunt specifice unei anumite sali si se pot gasi intr-un anumit numar. 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.001.jpeg)

**Constrangerile tabelelor** sunt urmatoarele:  Pentru *tabela Medic:* 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.002.png)

Pentru *tabela Pacient*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.003.png)

Pentru *tabela Medic/Pacient*:  

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.004.png)

Pentru *tabela Sala*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.005.png)

Pentru *tabela Sectie*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.006.png)

Pentru *tabela Alergie*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.007.png)

Pentru *tabela Alergie/Pacient*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.008.png)

Pentru *tabela Asistent*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.009.png)

Pentru *tabela Echipamente*: 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.010.png)

Pentru ***conectarea la baza de date*** am folosit instructiunile: 

<?php 

$serverName = "DESKTOP-VQ47I61\SQLEXPRESS"; //conectare la baza de date $connectionInfo = array( "Database"=>"tema1"); 

$conn = sqlsrv\_connect( $serverName, $connectionInfo); 

if( $conn ) { 

}else{ 

`     `echo "Connection could not be established.<br />";      die( print\_r( sqlsrv\_errors(), true)); 

} 

?> 

**Pentru *Delete*:** 

Am  sters  din  *tabela  Echipamente*  cu  urmatoarea  instructiune,  efectuand cautarea dupa numele echipamentului: 

$query = "DELETE FROM Echipamente WHERE NumeEchipament =  '$nume'"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.011.png)

Am sters din *tabela Sectie* cu urmatoarea instructiune, efectuand cautarea dupa numele sectiei: 

`     `$query = "DELETE FROM Sectie WHERE NumeSectie =  '$nume'"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.012.png)

**Pentru *Insert:*** 
\*
` `Am facut adaugari in tabela *Pacient* cu urmatoarea comanda: 

`     `$query  =  "INSERT  INTO  Pacient  (Nume,Prenume,Sex,CNP,Strada,NumarTelefon)  VALUES ('$nume', '$Prenume','$sex','$cod\_numeric','$strada','$nrtel')"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.013.png)

Am facut adaugari in tabela *Sectie* cu urmatoarea comanda: 

$query = "INSERT INTO Sectie (NumeSectie) VALUES ('$nume')"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.014.png)

**Pentru  Update**  pot  modifica  salariile  medicillor  si  ale  asistentilor  prin urmatoarele doua comenzi : 

`    `$query = "UPDATE Asistent SET Salariu = ('$salariu') WHERE IdAsistent = '$id'";      $query ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.015.png)= "UPDATE Medic SET Salariu = ('$salariu') WHERE IdMedic = '$id'"; 

**Interogari simple:**  

1) Pentru prima interogare aflu sectia in care este un medic al carui nume este 

introdus de la tastatura: 

$query = "SELECT S.IdSala FROM [tema1].[dbo].[Medic] M join Sala S on M.IdSala = S.IdSala  WHERE M.Nume='{$nume}'"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.016.png)

2) Pentru a doua interogare aflu ce asistenti coordoneaza un medic al carui 

nume este introdus de la tastatura: 

$query  =  "SELECT  A.Nume,'  ',  A.Prenume  FROM  Asistent  A  join  Medic  M  on  M.IdMedic  = A.IdMedic  WHERE M.Nume='{$nume2}'"; ![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.017.png)

3) Pentru a treia interogare aflu ce pacienti are un medic al carui nume este 

introdus de la tastatura: 

$query = "select p.Nume, p.Prenume 

From Medic m join MedicPacient mp  on m.IdMedic = mp.IdMedic join Pacient p on mp.IdPacient 

- p.IdPacient 

where m.Nume = '$nume'"; 

4) Pentru a patra interogare cautam ce alergii are un pacient al carui nume este 

introdus de la tastatura: 

$query = "SELECT A.NumeAlergie 

From  Alergie  A  join  [Alergie  pacient]  Ap  on  A.IdAlergie  =  Ap.IdAlergie  join  Pacient  p   on Ap.IdPacient = p.IdPacient 

where p.Nume = '$nume3'" 

5) A cincea interogare afla cei mai alergici pacienti: 

$query = "select top 1 p.Nume, p.Prenume 

From Pacient P join [Alergie pacient] ap on ap.IdPacient = p.IdPacient group by p.IdPacient ,p.Nume, p.Prenume"; 

6) A sasea interogare arata ce medici au grija de un anumit pacient: 

$query = "Select M.Nume 

From Medic m join MedicPacient Mp on M.IdMedic = Mp.IdMedic join Pacient p on Mp.IdPacient 

- P.IdPacient 

Where p.Nume = '$nume22'"; 

**Interogari complexe:** 

1) Pentru prima interogare o sa ordonez in functie de salariu asistentii care nu 

sunt coordonati de un anumit medic: 

$query = "select A.Nume, A.Prenume From Asistent A 

where A.IdAsistent not in (Select S.IdAsistent 

`    `from Asistent S join Medic m on m.IdMedic = s.IdMedic                    Where m.Nume = '{$nume}') 

order by A.Salariu "; 

2) Pentru a doua interogare o sa identific medicii care au salariu mai mic decat 

media salariilor asistentilor: 

$query = "select M.Nume, m.Prenume 

From Medic m 

where m.Salariu < (Select AVG(A.Salariu) 

from Asistent A ) 

"; 

3) Pentru a treia interogare o sa aflu cat reprezinta procentual  (%)  salariul 

unui medic fata de media salariilor tuturor medicilor: 

$query = "select M.Nume, m.Prenume,100\* m.Salariu / (Select avg(M1.Salariu) 

From Medic m1) 

As procente 

From Medic m 

where m.Nume = '$nume'"; 

4) Pentru a patra interogare o sa identific medicii care au salariul mai mare 

decat media salariilor tuturor asistentilor: 

$query = "select M.Nume, m.Prenume 

From Medic m 

where m.Salariu > (select avg(a.salariu) 

`                   `from Asistent a 

`   `where m.IdMedic = a.IdAsistent)"; 

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.018.jpeg)

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.019.jpeg)

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.020.jpeg)

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.021.jpeg)

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.022.jpeg)

![](Aspose.Words.186aa3f4-6af5-445b-a799-e3c382786c3f.023.jpeg)
