
  <?php
//connexion a la BDD
$db = new PDO('mysql:host=localhost;dbname=h48', 'root','');
//fait un update de la table articles pour bien modifier le titre et le type pour utilisé les tags
$req = $db->prepare('UPDATE articles SET titre=:titre, type=:type WHERE id=:num LIMIT 1');

$req->bindValue(':num',$_POST['IDtable'],PDO::PARAM_INT);
$req->bindValue(':titre', $_POST['titre'],PDO::PARAM_STR);
$req->bindValue(':type', $_POST['type'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
  header("Location: ../index2.php#experience");
}

else{
    $message = 'L annonce n a pas  été mis a jour';
}

?>
