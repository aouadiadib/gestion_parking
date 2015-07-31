<?php
require_once("DataBase.php");
class user
{

	public function __construct()
	{	
		
	}
	
	
	
	
	
	
	
 public function login($login,$pass,$type){

 	if($type=="responsable parking")
		{

	$select= DataBase::connect()->query("select * from responsable where login='$login' and pass='$pass' and type='$type' ");
	$e= $select->rowCount();
	if($e>0){
		

		
			header('location:liste_sortie.php');
		}
		 else 
	{
	echo '<br><strong> Login et mot de passe incorrecte</strong>';
	}
}
 
	


		if($type=="responsable atelier")
		{
			$select= DataBase::connect()->query("select * from responsable where login='$login' and pass='$pass' and type='$type' ");
	$e= $select->rowCount();
	if($e>0){
		
		
			header('location:liste_panne.php');
		}
		 else 
	{
	echo '<br><strong> Login et mot de passe incorrecte</strong>';
	}
 
	}


	
 }

 
 public function changer_pass($npass,$type){
	
	
$MODIFIER = DataBase::connect()->prepare('UPDATE responsable SET
pass=:pass where type=:type');

try {
  
	$success = $MODIFIER->execute(array(
    'pass'=>$npass,
    'type'=>$type
    
  ));
  }
  catch( Exception $e )
   {
	  
	  echo 'Erreur de requète : ', $e->getMessage();
	
   }
	return true;
 }
	
	
 
 
 
 
  public function location($link){

  header('Location: '.$link);
 }
 
  
 

 
  public function logout(){

  session_name('SESSION1');
  session_start();
  session_destroy(); 
	header ('location:../index.php');
 }
 

 
	
 
 
 public function affichage()
	{
	
	if(isset($_GET["message"])) {
		$msg = $_GET["message"];
		if($msg=='delete')
	{
		$message ="<div class='alert alert-success alert-dismissable'>
   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
      &times;
   </button>Supression avec succées</div>";
	} 
	if($msg=='add')
	{
		
		$message ="<div class='alert alert-success alert-dismissable'>
   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
      &times;
   </button>Ajout avec succées</div>";
	}

	if($msg=='update')
		{
			
		$message ="<div class='alert alert-success alert-dismissable'>
   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
      &times;
   </button>Modification avec succées</div>";
			}

	} 	else 
			{
			$message = "";
		}
	
			echo $message ;

	}
	
 
 }
 
 
 

 
 
?>