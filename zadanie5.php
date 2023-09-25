<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie5</title>
</head>
<body>
    <table>
 
    <?php
$con = new mysqli("localhost","root","","wedkowanie");
$pon = 3;
$nazwa = "'L%'";
$q = "SELECT * FROM ryby WHERE id > " . $pon . " AND nazwa LIKE" . $nazwa;
 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo "<tr> <th>" . $row["nazwa"] . "</th> <th>" . $row["styl_zycia"] . "</th> <th>" . $row["wystepowanie"] . "</th></tr>";
else
echo $con->errno . " " . $con->error;
?>
    </table>
</body>
</html>