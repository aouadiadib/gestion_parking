<?php
require_once("DataBase.php");
class panne
{




	

public function liste_panne()
	{
		$select = DataBase::connect()->query("select * from panne as p inner join vehicule as v on p.id_v=v.id_v  ORDER BY id_panne DESC");

	
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_panne =$donnees->id_panne;
			$date_p= $donnees->date_p;
			$etat= $donnees->etat;
			$type= $donnees->type;
			$matricule= $donnees->matricule;
			$id_v = $donnees->id_v;
			
			echo "<tr>";
			echo "<td>";
			echo $id_panne;
			echo "</td>";
			echo "<td>";
			echo $matricule;
			echo "</td>";
			echo "<td>";
			echo $type;
			echo "</td>";
			
			
			echo "<td>";
			echo $date_p;
			echo "</td>";


			echo "<td>";
			echo $etat;
			echo "</td>";

			echo "<td>";
			echo "<a href='modifier_panne.php?id=$id_panne'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='supprimer_panne.php?id=$id_panne'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer la panne: ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}


	public function supprimer_panne($id)
	{
		$delete = DataBase::connect()->query("delete from panne where id_panne=$id");
		if($delete)
		{
			return true;
		}
	}

public function select_panne($id)
	{
		$select = DataBase::connect()->query("select * from panne where id_panne=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}

public function ajouter_panne($date,$etat,$vehicule)
	{
	
		$insert = DataBase::connect()->prepare('insert into panne VALUES
		(NULL,:date,:etat,:vehicule)');
try {		
	$ins = $insert->execute(
	array(
	'date'=>$date,
	'etat'=>$etat,
	'vehicule'=>$vehicule
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			return true;
		}


public function modifier_panne($id,$date,$etat)
	{	
	
		$up = DataBase::connect()->prepare('update panne SET
		(date_p=:date,etat=:etat where id_panne=:id_panne)');
try {		
	$update = $up->execute(
	array(
	'id_panne'=>$id,
	'date'=>$date,
	'etat'=>$etat
	)
	);
	
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
		
	}


	



}