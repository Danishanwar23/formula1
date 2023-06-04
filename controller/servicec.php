<!DOCTYPE html>
<html>

<?php 
include_once '../config.php';
class servic{

function getEquipeById($id) {
    $sql = "SELECT * FROM equipe WHERE id = :id";
    $db = config::getConnexion();
    try {
        $statement = $db->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $voiture = $statement->fetch(PDO::FETCH_ASSOC);
        return $voiture;
    } catch(Exception $e) {
        die("Erreur: " . $e->getMessage());
    }
}

function getCircuitById($id) {
    $sql = "SELECT * FROM circuit WHERE id = :id";
    $db = config::getConnexion();
    try {
        $statement = $db->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $voiture = $statement->fetch(PDO::FETCH_ASSOC);
        return $voiture;
    } catch(Exception $e) {
        die("Erreur: " . $e->getMessage());
    }
}



function getVoitureById($id) {
    $sql = "SELECT * FROM voiture WHERE id = :id";
    $db = config::getConnexion();
    try {
        $statement = $db->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $voiture = $statement->fetch(PDO::FETCH_ASSOC);
        return $voiture;
    } catch(Exception $e) {
        die("Erreur: " . $e->getMessage());
    }
}

function affichervoiture(){
 	$sql="SELECT * FROM voiture 

 	";
 	$db=config::getConnexion();
 	try{
 		$liste=$db->query($sql);
 		return $liste;
 	}
 	catch(Exception $e){
 		die("erreur:".$e->getMessage());
 	}
 }
   function supprimervoiture($numadh){
    $sql="DELETE  FROM voiture WHERE `id`= $numadh ";
	$db=config::getConnexion();
	try{
		$liste=$db->query($sql);

	}catch(Exception $e){
		die("erreur:".$e->getMessage());
}
}

function Modifiervoiture($ser)
{
$sqlc= "UPDATE `voiture` SET nom=:nom , puissance=:puissance WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
$recipesStatement->execute([ 
                'nom'=>$ser->getnom(),
                'puissance' => $ser->getpuissance(),
				'id'=>$ser->getid(),
			 ]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());
}

}

function Ajoutervoiture($ser){
$sql= "INSERT INTO `voiture` (`id`, `nom`, `vitesse`, `matricule`, `image`, `prix`, `logo`, `poid`, `hauteur`, `largeur`, `description`, `marque`, `id_equipe`)
      VALUES (:id, :nom, :vitesse, :matricule, :image, :prix, :logo, :poid, :hauteur, :largeur , :description , :marque, :id_equipe)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
$recipesStatement->execute([ 'id'=>$ser->getid(),
				'nom' =>$ser->getnom(),
                'vitesse' =>$ser->getvitesse(),
                'matricule' =>$ser->getmatricule(),
                'image'=>$ser->getimage(),
                'prix'=>$ser->getprix(),
                'logo'=>$ser->getlogo(),
                'poid'=>$ser->getpoid(),
                'hauteur'=>$ser->gethauteur(),
                'largeur'=>$ser->getlargeur(),
                'description'=>$ser->getdescription(),
                'marque'=>$ser->getmarque(),
                'id_equipe'=>$ser->getid_equipe(),



]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());

}

}




function afficherclient(){
    $sql="SELECT * FROM client

    ";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die("erreur:".$e->getMessage());
    }
}
  function supprimerclient($numadh){
   $sql="DELETE  FROM client WHERE `id`= $numadh ";
   $db=config::getConnexion();
   try{
       $liste=$db->query($sql);

   }catch(Exception $e){
       die("erreur:".$e->getMessage());
}
}

function Modifierclient($ser)
{
$sqlc= "UPDATE `client` SET nom=:nom WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
$recipesStatement->execute([ 'nom'=>$ser->getnom(),
               'id'=>$ser->getid(),
            ]);
}
catch(Exception $e){ 

        die("erreur:".$e->getMessage());
}

}

function Ajouterclient($ser){
$sql= "INSERT INTO `client` VALUES (:id, :nom)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
$recipesStatement->execute([ 'id'=>$ser->getid(),
               'nom' =>$ser->getnom(),
]);
}
catch(Exception $e){ 

        die("erreur:".$e->getMessage());

}
}


function affichercircuit(){
    $sql="SELECT * FROM circuit

    ";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die("erreur:".$e->getMessage());
    }
}

function Ajouterreservation($ser) {
    
    $sql = "INSERT INTO `reservation` ( `date`, `reference`, `id_circuit`, `id_equipe`, `id_client`)
            VALUES (:date, :reference, :id_circuit, :id_equipe, :id_client)";
    $db = config::getConnexion();
    try {
        $recipesStatement = $db->prepare($sql);
        $recipesStatement->execute([
            ':date' => $ser->getdate(),
            ':reference' => $ser->getreference(),
            ':id_circuit' => $ser->getid_circuit(),
            ':id_equipe' => $ser->getid_equipe(),
            ':id_client' => $ser->getid_client()
        ]);
    } catch (Exception $e) {
        die("erreur:".$e->getMessage());
    }
}

    
function afficherreservation(){
    $sql="SELECT * FROM reservation

    ";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die("erreur:".$e->getMessage());
    }
}


function recherche($search_value)
{
    $sql="SELECT * FROM circuit where 	id like '$search_value' or nom like '%$search_value%' or localisation like '%$search_value%'  ";

    //global $db;
    $db =Config::getConnexion();

    try{
        $result=$db->query($sql);

        return $result;

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


function recherchevoit($search_value)
{
    $sql="SELECT * FROM voiture where 	id like '$search_value' or nom like '%$search_value%'  ";

    //global $db;
    $db =Config::getConnexion();

    try{
        $result=$db->query($sql);

        return $result;

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

    
function affichervoitavecplusreservation(){
    $sql="SELECT v.*, e.*, r.* FROM voiture v JOIN equipe e ON v.id_equipe = e.id JOIN reservation r ON r.id_equipe = e.id GROUP BY v.id ORDER BY r.date DESC";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die("erreur:".$e->getMessage());
    }
}





}

?>
</html>