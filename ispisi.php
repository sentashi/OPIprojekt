<?php 
 include "connectiondb.php";



 $sql= "SELECT * FROM proizvodi";
 $result= mysqli_query($conn, $sql);


 if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
        $cijena=($row["cijenaBez"]*$row["PDV"])/100 + $row["cijenaBez"];
        echo'
            <tr>
                <td>'.$row["naziv"].'</td>
                <td>'.$row["cijenaBez"].'</td>
                <td>'.$row["PDV"].'</td>
                <td>'.$cijena.'</td>
                <td>'.$row["količina"].'</td>
                <td>'.$row["mjernaJedinica"].'</td>
            </tr>';

     }
    
 }
 ?>


