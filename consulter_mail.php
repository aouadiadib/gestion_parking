<?php
require_once("header.php");
 ?>


			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					
				</li>
				<li><a href="#">Consulter mail</a></li>
			</ul>

				
<?php
		
		$id = $_GET["id"];
		$liste = $mail->select_mail($id);

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
							echo $row["id_mail"];		
					?>
			</td>
		</tr>

		<tr>

			<td>
				date : 
			</td>
			<td>
					<?php 
							echo $row["date"];		
					?>
			</td>
		</tr>

<tr>

			<td>
				Sujet : 
			</td>
			<td>
					<?php 
							echo $row["sujet"];		
					?>
			</td>
		</tr>

<tr>

			<td>
				Texte : 
			</td>
			<td>
					<?php 
							echo $row["texte"];		
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
