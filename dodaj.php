<?php 

include 'connectiondb.php';

$naziv=$_POST["naziv"];
$cijenaBez=$_POST["cijenaBez"];
$pdv=$_POST["pdv"];
$kolicina=$_POST["kolicina"];
$mjernaJedinica=$_POST["mjernaJedinica"];

$sql="INSERT into proizvodi (naziv, cijenaBez, PDV, količina, mjernaJedinica) values ('$naziv','$cijenaBez','$pdv','$kolicina', '$mjernaJedinica');";
$result=mysqli_query($conn, $sql);
if($result=true){
    echo 'Uspješno ste dodali proizvod';
}
else {
    echo 'Pokušajte ponovno';
}

?>
<a href="evidencija.php"></a>