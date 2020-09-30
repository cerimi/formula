<!DOCTYPE html>
<html>
<meta charset="UTF-8"> 
<body>


<?php
$i = 0;
$ime = $_POST['ime'];
 $prezime = $_POST['prezime'];
 
 $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
   $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
	 $q5 = $_POST['q5'];

 
 if($q1 == 3) $i= $i+1;
  if($q2 == 1) $i= $i+1;
   if($q3 == 4) $i= $i+1;
    if($q4 == 2) $i= $i+1;
	 if($q5 == 2) $i= $i+1;

		  
		  echo 'Your name is ' . $ime . ' ' . $prezime.'. ' ; 

$i=$i*10;
if($i < 50) echo 'Mozes bolje. '; 
if($i >= 50) echo 'Bravo. Prosao si ispit. '; 
echo ' Rijesio si ' . $i . '%.' ; 

?>



</body>
</html> 