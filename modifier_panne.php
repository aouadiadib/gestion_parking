<?php
require_once("header_atelier.php");
 ?>


			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					
				</li>
				<li><a href="#">Modifier Panne</a></li>
			</ul>
			<div class="box-content">
<?php 
$id = $_GET["id"];
$liste = $panne->select_panne($id);
foreach ($liste as $item) {
	
	$date = $item["date_p"];
	$etat = $item["etat"];

}

?>
	<form class="form-horizontal" role="form" method="post" action="#">



 <?php
 
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

	

			$date = $_POST['date'];
			$etat = $_POST['etat'];
			
			
			
			
			$Modif=$panne->modifier_panne($id,$date,$etat);
			
			if($Modif)
			{
				echo '<script language="Javascript">
<!--
document.location.replace("liste_panne.php?message=update");
// -->
</script>';
				
			}
		}
	?>


						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Date :  </label>
							  <div class="controls">
								<input type="date" value="<?php echo $date; ?>" name="date" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
							
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Etat :  </label>
							  <div class="controls">
							  	<?php 
							  	if($etat=="réparer")
							  	{


							  	?>

							  	<select name="etat">
									<option  value="en panne"> Vehicule en panne 		</option>
									<option selected  value="répare"> Vehicule Réparée 		</option>
								</select>
								
								<?php 
							}
									else{
										?>
										<select name="etat">
									<option selected value="en panne"> Vehicule en panne 		</option>
									<option  value="répare"> Vehicule Réparée 		</option>
								</select>

										<?php 
										}
								?>

							  </div>
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


