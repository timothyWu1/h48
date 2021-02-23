
  <?php 

$db = new PDO('mysql:host=localhost;dbname=h48', 'root','');
$req = $db->prepare("UPDATE `filtres` SET `Composant` = NULL WHERE id=:num LIMIT 1 ");
$req->bindValue(':num',$_GET['IDtable'],PDO::PARAM_INT);

$executeIsOk = $req->execute();

if($executeIsOk){
    
  header("Location: ../index2.php");
}

else{

    $message = 'echec de la suppression';
}



?>

</body>
</html>