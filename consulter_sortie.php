<?php
require_once("header.php");
 ?>


			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					
				</li>
				<li><a href="#">Consulter sortie</a></li>
			</ul>

				
<?php
		
		$id = $_GET["id"];
		$liste = $sortie->select_sortie($id);

		foreach ($liste as $row) {
		
	

		?>
 <br>
  <a href="" onclick='window.print();'><img src='img/print.png' width='30' height='30'></img> </a>

 <br><br>
		<table class="table table-responsive table-bordered table-hover">
		
		<tbody>
		
		<tr>

			<td>
				ID : 
			</td>
			<td>
					<?php 
							echo $row["id_sortie"];		
					?>
			</td>
		</tr>

		<tr>

			<td>
				Date : 
			</td>
			<td>
					<?php 
							echo $row["date"];		
					?>
			</td>
		</tr>

<tr>

			<td>
				Heur de sortie : 
			</td>
			<td>
					<?php 
							echo $row["heur_s"];		
					?>
			</td>
		</tr>

<tr>

			<td>
				Heur de retour : 
			</td>
			<td>
					<?php 
							echo $row["heur_r"];		
					?>
			</td>
		</tr>



<tr>

			<td>
				Type de vehicule : 
			</td>
			<td>
					<?php 
							echo $row["type"];		
					?>
			</td>
		</tr>
		<tr>
			<td>
				Matricule de vehicule : 
			</td>
			<td>
					<?php 
							echo $row["matricule"];		
					?>
			</td>
		</tr>
		<tr>
			<td>
				Nom & Prenom de chauffeur : 
			</td>
			<td>
					<?php 
							echo $row["nom"]." ".$row["prenom"];
					?>
			</td>
		</tr>
<?php  } ?>

		</tbody>
		</table>

					
					


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
