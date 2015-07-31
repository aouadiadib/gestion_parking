<?php
require_once("header.php");
 ?>

<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					
				</li>
				<li><a href="#">Modification</a></li>
			</ul>
			<div class="box-content">
				<?php 
				$id = $_GET["id"];
				$liste = $ch->select_chauffeur($id);

				foreach($liste 	as $row )
				{
					$nom = $row["nom"];
					$prenom = $row["prenom"];
					$email = $row["email"];
					$tel = $row["tel"];
				}

				?>

	<form class="form-horizontal" role="form" method="post" action="#">



 <?php
 
 $nomE=$prenomE=$emailE=$telE="";
 
	 if (isset($_POST["xx"])) 
		{
		
if( $controle->vide($_POST["nom"])) 
{
	$nomE=" * champ obligatoire";

}	

if( $controle->vide($_POST["prenom"])) 
{
	$prenomE=" * champ obligatoire";
}

if( $controle->vide($_POST["email"])) 
{
	$emailE=" * champ obligatoire";
}

if( $controle->vide($_POST["tel"])) 
{
	$telE=" * champ obligatoire";
}



if($controle->no_vide($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["tel"]))
{		

			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			 
			
			
			$ajout=$ch->modifier_chauffeur($id,$nom,$prenom,$email,$tel);
			
			if($ajout)
			{
				
echo '<script language="Javascript">
<!--
document.location.replace("liste_chauffeur.php?message=update");
// -->
</script>';
			}
		}}
	?>


						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nom :  </label>
							  <div class="controls">
								<input type="text" value="<?php  echo $nom;  ?>" name="nom" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
								<p class="help-block"><?php echo $nomE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Prenom :  </label>
							  <div class="controls">
								<input type="text" name="prenom" value="<?php  echo $prenom;  ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $prenomE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email :  </label>
							  <div class="controls">
								<input type="email"  value="<?php  echo $email;  ?>" name="email" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $emailE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label"  for="typeahead">Teléphone :  </label>
							  <div class="controls">
								<input type="number" value="<?php  echo $tel;  ?>" name="tel" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $telE ?></p>
							  </div>
							</div>
							<br><br><br>
							<div class="form-actions">
							  <button type="submit" name="xx" class="btn btn-primary">Modifier</button>
							  <button type="reset" class="btn btn-primary">Annuler</button>
							</div>
						  </fieldset>
						</form>   

					</div>
					
					


				<div class="clearfix"></div>
	
	
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
