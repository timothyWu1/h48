
  <?php 
//connexion a la BDD
$db = new PDO('mysql:host=localhost;dbname=h48', 'root','');

//Supprime tout ce qu'il y a dans articles via son ID
$req = $db->prepare('DELETE FROM articles WHERE id=:num LIMIT 1 ');
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