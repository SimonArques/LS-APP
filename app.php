<?php    
  require 'config.php';    

$QCODE = $_POST['QCODE'];
$Table = $_POST['Table'];
$Value1 = $_POST['firstValue'];
$Value2 = $_POST['secondValue'];


    $sql = 'UPDATE $Table
SET $QCODE='$firstValue'
WHERE $QCODE='$secondValue'; '

$req = $pdo->query($sql);    
while($row = $req->fetch()) {    
echo '<a href="membre-'.$row['id'].'.html">'.$row['pseudo'].'</a><br/>';    
}    
  
$req->closeCursor();

  
?php>

