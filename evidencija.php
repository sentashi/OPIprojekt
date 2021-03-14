<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencija Proizvoda</title>
</head>
<body>
    <h1>Evidencija proizvoda i stanja na skladištu</h1>
<table   border="1" cellpadding="10px" cellspacing="5px">    
        <tr>    
          <td>Naziv proizvoda </td>    
          <td>Cijena bez PDV</td>    
          <td>PDV</td>
          <td>Cijena</td>
          <td>Na skladištu</td>
          <td>Mjerna jedinica</td>
        </tr>    
        
        <?php include "ispisi.php"?>
        
        </table>  
        <a href="dodavanje.php"><button >Dodaj proizvod</button></a>
</body>
</html>