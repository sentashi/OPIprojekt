<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj proizvod</title>
</head>
<body>
    <h1>Dodaj proizvod</h1>
    <form action="dodaj.php" method="post">
        <table border="1" cellpadding="10px" cellspacing="5px">    
            <tr>    
            <td>Naziv proizvoda </td>    
            <td>Cijena bez PDV</td>    
            <td>PDV</td>
            <td>Na skladištu</td>
            <td>Mjerna jedinica</td>
            </tr>    

            <tr>
            <td><input id="naziv" name="naziv" type="text"></td>    
            <td><input id="cijenaBez" name="cijenaBez" type="number"></td>    
            <td><input id="pdv" name="pdv" type="number"></td>
            <td><input id="kolicina" name="kolicina" type="number"></td>
            <td><input id="mjernaJedinica" name="mjernaJedinica" type="text"></td>
            </tr>
        </table> 
        <button>Dodaj</button>
    </form>
 
</body>
</html>