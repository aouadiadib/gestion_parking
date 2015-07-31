<?php
require_once("DataBase.php");
class sortie
{


	public function ajouter_sortie($date,$heur_s,$heur_r,$direction)
	{
	
		$insert = DataBase::connect()->prepare('insert into sortie VALUES
		(NULL,:date,:heur_s,:heur_r,:direction,NULL,NULL)');
try {		
	$ins = $insert->execute(
	array(
	'date'=>$date,
	'heur_r'=>$heur_r,
	'heur_s'=>$heur_s,
	'direction'=>$direction
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			return true;
		}

public function modifier_sortie($id_ch,$id_v,$id)
	{
	
		$insert = DataBase::connect()->prepare('update sortie SET
		id_ch=:id_ch,id_v=:id_v where id_sortie=:id_sortie');
try {		
	$ins = $insert->execute(
	array(
	'id_ch'=>$id_ch,
	'id_v'=>$id_v,
	'id_sortie'=>$id
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			return true;
		}



public function liste_sortie()
	{
		$select = DataBase::connect()->query("select * from sortie  ORDER BY id_sortie DESC");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_sortie= $donnees->id_sortie;
			$date= $donnees->date;
			$heur_s= $donnees->heur_s;
			$heur_r= $donnees->heur_r;
			$direction= $donnees->direction;
			echo "<tr>";
			echo "<td>";
			echo $id_sortie;
			echo "</td>";
			echo "<td>";
			echo $date;
			echo "</td>";
			echo "<td>";
			echo $heur_s;
			echo "</td>";
			echo "<td>";
			echo $heur_r;
			echo "</td>";
			echo "<td>";
			echo $direction;
			echo "</td>";
			
			echo "<td>";
			echo "<a href='consulter_sortie.php?id=$id_sortie'>"; 
			echo " <img src='img/chercher.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			
			
			echo "<td>";
			echo "<a href='supprimer_sortie.php?id=$id_sortie'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer la vehicule: ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}



public function select_date()
	{
		$select = DataBase::connect()->query("select * from sortie  ORDER BY id_sortie DESC LIMIT 1");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			
			$date= $donnees->date;
			
		}
		

		return $date;
	}

public function select_id()
	{
		$select = DataBase::connect()->query("select * from sortie  ORDER BY id_sortie DESC LIMIT 1");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			
			$id= $donnees->id_sortie;
			
		}
		

		return $id;
	}




	public function supprimer_sortie($id)
	{
		$delete = DataBase::connect()->query("delete from sortie where id_sortie=$id");
		if($delete)
		{
			return true;
		}
	}

public function select_sortie($id)
	{
		$select = DataBase::connect()->query("select * from sortie as s inner join vehicule as v inner join chaufeur as c on s.id_v=v.id_v and s.id_ch=c.id_ch");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}



}
?>
