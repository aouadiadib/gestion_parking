<?php
require_once("DataBase.php");
class vehicule
{

public function liste_vehicule()
	{
		$select = DataBase::connect()->query("select * from vehicule  ORDER BY id_v DESC");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_v= $donnees->id_v;
			$type= $donnees->type;
			$matricule= $donnees->matricule;
			$age= $donnees->age;
			echo "<tr>";
			echo "<td>";
			echo $id_v;
			echo "</td>";
			echo "<td>";
			echo $matricule;
			echo "</td>";
			echo "<td>";
			echo $type;
			echo "</td>";
			echo "<td>";
			echo $age;
			echo "</td>";
			echo "<td>";
			echo "<a href='modifier_v.php?id=$id_v'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='supprimer_v.php?id=$id_v'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer la vehicule: ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}

public function select_liste_vehicule()
	{	
		
		$select = DataBase::connect()->query("select * from vehicule where   ORDER BY id_v DESC");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_v= $donnees->id_v;
			$type= $donnees->type;
			$matricule= $donnees->matricule;
			$age= $donnees->age;
			echo "<tr>";
			echo "<td>";
			echo $id_v;
			echo "</td>";
			echo "<td>";
			echo $matricule;
			echo "</td>";
			echo "<td>";
			echo $type;
			echo "</td>";
			echo "<td>";
			echo $age;
			echo "</td>";
			echo "<td>";
			echo "<a href='modifier_v.php?id=$id_v'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='supprimer_v.php?id=$id_v'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer la vehicule: ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}

	public function supprimer_vehicule($id)
	{
		$delete = DataBase::connect()->query("delete from vehicule where id_v=$id");
		if($delete)
		{
			return true;
		}
	}

public function select_vehicule($id)
	{
		$select = DataBase::connect()->query("select * from vehicule where id_v=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}

public function ajouter_vehicule($mat,$type,$age)
	{
	
		$insert = DataBase::connect()->prepare('insert into vehicule VALUES
		(NULL,:matricule,:type,:age)');
try {		
	$ins = $insert->execute(
	array(
	'matricule'=>$mat,
	'type'=>$type,
	'age'=>$age
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			return true;
		}


public function modifier_vehicule($id,$mat,$type,$age)
	{
	
		$up = DataBase::connect()->prepare('update  vehicule SET
		matricule=:mat,age=:age,type=:type where id_v=:id_v');
try {		
	$update = $up->execute(
	array(
	'id_v'=>$id,
	'mat'=>$mat,
	'type'=>$type,
	'age'=>$age
	
	)
	);
	
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	

			}
			
		return true;
		
	}



public function liste_vehicule_date($date)
{
	$select = DataBase::connect()->query("select * from vehicule where vehicule.id_v not in (select id_v from sortie where date=$date)");
		$row = array();
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			echo "<option value='$donnees->id_v'>";

			echo $donnees->type." ".$donnees->matricule;

			echo "</option>";
		}

		return true;
}


public function liste_vehicule_select_option()
{
	$select = DataBase::connect()->query("select * from vehicule where id_v not in (select id_v from panne)");
		$row = array();
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			echo "<option value='$donnees->id_v'>";

			echo $donnees->type." ".$donnees->matricule;

			echo "</option>";
		}

		return true;
}


}