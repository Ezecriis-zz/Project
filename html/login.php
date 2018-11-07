<div class="container">
		<br>
		<div class="row">
	    	<div class="col-sm-12 col-md-6 col-lg-5 bg-light mx-auto">
					<br>
					<img class="img-fluid rounded" src="img/reloj.jpg" alt="">
					<form action="php/login.php" name="formulario" id="formulario" method="post">
						<div class="form-group">
							<br>
							<label for="control">CUIL:</label>
							<input class="form-control" type="text" name="cuil" id="cuil"  placeholder="Ingrese cuil..." required>
						</div>
						<div class="form-group">
							<label for="control">Contraseña:</label>
							<input class="form-control" type=password name="pass" id="pass"  placeholder="Ingrese contraseña..." required>
						</div>
						<div class="form-group">
							<br>
							<button  class="btn btn-outline-dark btn-block" type="submit" name="enviar" id="enviar">Entrar</button>
							<br>
							<center><p><a href="#" class="text-danger">Olvide mi contraseña</a></p></center>
						</div>
					</form>
	    </div>
		</div>
		<br>
		<br>
	</div>