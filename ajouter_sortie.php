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
				<li><a href="#">Ajouter Sortie</a></li>
			</ul>
			<div class="box-content">

	<form class="form-horizontal" role="form" method="post" action="#">



 <?php
 
 $dateE=$heur_sE=$heur_rE=$directionE="";
 
	 if (isset($_POST["xx"])) 
		{
		
if( $controle->vide($_POST["date"])) 
{
	$dateE=" * champ obligatoire";

}	

if( $controle->vide($_POST["heur_s"])) 
{
	$heur_sE=" * champ obligatoire";
}

if( $controle->vide($_POST["heur_r"])) 
{
	$$heur_rE=" * champ obligatoire";
}

if( $controle->vide($_POST["direction"])) 
{
	$directionE=" * champ obligatoire";
}



if($controle->no_vide($_POST["date"],$_POST["heur_s"],$_POST["heur_r"],$_POST["direction"]))
{		

			$date = $_POST['date'];
			$heur_s = $_POST['heur_s'];
			$heur_r = $_POST['heur_r'];
			$direction = $_POST['direction'];
			
			
			
			$ajout=$sortie->ajouter_sortie($date,$heur_s,$heur_r,$direction);
			
			if($ajout)
			{
				
echo '<script language="Javascript">
<!--
document.location.replace("suite_ajouter_sortie.php?message=add");
// -->
</script>';
			}
		}}
	?>


						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Date de sortie :  </label>
							  <div class="controls">
								<input type="date" name="date" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
								<p class="help-block"><?php echo $dateE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Heure de sortie :  </label>
							  <div class="controls">
								<input type="time" name="heur_s" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $heur_sE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Heure de retour :  </label>
							  <div class="controls">
								<input type="time" name="heur_r" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $heur_rE ?></p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Direction :  </label>
							  <div class="controls">
								<input type="text" name="direction" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block"><?php echo $directionE ?></p>
							  </div>
							</div>
							<br><br><br>
							<div class="form-actions">
							  <button type="submit" name="xx" class="btn btn-primary">Suivant</button>
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
