<?php
$dblink = new mysqli("localhost", "root",
"alus!", "posti");
 $dblink->set_charset("utf8");
//izveidots mysql objekts kuram taalak var izsaukt mysql klaes metodes.. ar notaaciju piem $dblink->query()  vai $dblink->close

// pārbaudam vai pieslēgšanās notikusi veiksmīgi,
// ja nē izvada kļūdas paziņojumu un pārtrauc skripta izpildi
if (mysqli_connect_errno()) {
 printf("Neizdevās pieslēgties: %s\n", mysqli_connect_error());
 exit();
}
printf("Informācija par serveri: %s\n", $dblink->host_info);
/* aizver pieslēgumu datu bāzei*/
//$dblink->close();
?>
