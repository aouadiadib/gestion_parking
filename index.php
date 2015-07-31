<?php
require_once("header_index.php");
 ?>


			<center>
			<br><br><br>
<img src="img/logo.jpg" width="300" height="200">

      <br><br>
<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<h1>Authentification</h1>
        <br><br>
				<div class="panel-body">
				
					<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
						
						<fieldset>
              <div class="form-group">
                <select name="type">
                  <option value="responsable parking">Respensable parking</option>
                  <option value="responsable atelier">Respensable atelier</option>
                </select>
              </div>
							<div class="form-group">
								<input class="form-control"  placeholder="Login" name="login" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mot de passe" name="pass" type="password" value="">
							</div>
							<br>
							<input type="submit" value="Connecter" class="btn btn-primary">
              <input type="reset" value="Annuler" class="btn btn-primary">
						</fieldset>
<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
							
							$log=$_POST["login"];
							$pass=$_POST["pass"];
							$type=$_POST["type"];
							
			
				if($controle->vide($log) || $controle->vide($pass)	) 
				{
						echo '<br><strong>Ecrire votre login et mot de passe</strong>';
				}
				
				else
				{
				
					$user->login($log,$pass,$type);
								
							}
							
		}
							
						
						
						?>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		</center>
	
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
