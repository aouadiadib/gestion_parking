<?php
require_once("DataBase.php");
class chauffeur
{

public function liste_chauffeur()
	{
		$select = DataBase::connect()->query("select * from chaufeur  ORDER BY id_ch DESC");

	
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_ch= $donnees->id_ch;
			$nom= $donnees->nom;
			$prenom= $donnees->prenom;
			$email= $donnees->email;
			$tel= $donnees->tel;
			
			echo "<tr>";
			echo "<td>";
			echo $id_ch;
			echo "</td>";
			echo "<td>";
			echo $nom;
			echo "</td>";
			echo "<td>";
			echo $prenom;
			echo "</td>";
			
			echo "<td>";
			echo $email;
			echo "</td>";
			echo "<td>";
			echo $tel;
			echo "</td>";
			echo "<td>";
			echo "<a href='modifier_ch.php?id=$id_ch'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='supprimer_ch.php?id=$id_ch'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer le chauffeur: ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}


	public function supprimer_chauffeur($id)
	{
		$delete = DataBase::connect()->query("delete from chaufeur where id_ch=$id");
		if($delete)
		{
			return true;
		}
	}

public function select_chauffeur($id)
	{
		$select = DataBase::connect()->query("select * from chaufeur where id_ch=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}

public function ajouter_chauffeur($nom,$prenom,$email,$tel)
	{
	
		$insert = DataBase::connect()->prepare('insert into chaufeur VALUES
		(NULL,:nom,:prenom,:email,:tel)');
try {		
	$ins = $insert->execute(
	array(
	'nom'=>$nom,
	'prenom'=>$prenom,
	'tel'=>$tel,
	'email'=>$email
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			return true;
		}


public function modifier_chauffeur($id,$nom,$prenom,$email,$tel)
	{	
	
		$up = DataBase::connect()->prepare('update chaufeur SET
		nom=:nom,prenom=:prenom,tel=:tel,email=:email where id_ch=:id_ch');
try {		
	$update = $up->execute(
	array(
	'id_ch'=>$id,
	'nom'=>$nom,
	'prenom'=>$prenom,
	'tel'=>$tel,
	'email'=>$email
	)
	);
	
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
		
	}


	public function liste_chaufeur_date($date)
{
	$select = DataBase::connect()->query("select * from chaufeur where chaufeur.id_ch not in (select id_ch from sortie where date=$date)");
		$row = array();
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			echo "<option value='$donnees->id_ch'>";

			echo $donnees->nom." ".$donnees->prenom;

			echo "</option>";
		}

		return true;
}



}