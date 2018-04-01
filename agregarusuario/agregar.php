  <!DOCTYPE html>
  <html lang="es">
  <head>
    <title>usua</title>
    <meta charset="UTF8"> 	
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
	<script src="js/validar.js"></script>
      </head>

<body>  
	<header>Formulario de registro de usuarios<header>
<section>

<form action="xd.php" onsubmit = "return validar();" method="POST" class="form-register" >
<div class="solidline"></div>
			<div class="form-group">
				<label for="Nombre" class="control-label col-sm-2">Nombre(s):</label>
				<div class="col-sm-10">
			    <input name="Nombre" id="Nombre" type="text"  class="form-control req"  />
				</div>
				<br></br>
			</div>
			<div class="form-group">
				<div class="col-sm-6">
				<label for="appat" class="control-label col-sm-3">Primer Apellido:</label>
				<div class="col-sm-8">
				<input  name="appat" id="appat" type="text" class="form-control req" />
					</div>
			</div>
			<div class="col-sm-6">
				<label for="apmat" class="control-label col-sm-3">Segundo Apellido:</label>
				<div class="col-sm-8">
				<input  name="apmat" id="apmat" type="text" class="form-control req" />
					</div>
				</div>
			</div>
			<br></br>
			<div class="form-group">
				<label for="curp" class="control-label col-sm-2">Curp:</label>
				<div class="col-sm-10">
					<input  name="curp" id="curp" type="text" class="form-control req" placeholder="Solo myusculas"/>
				</div>
			</div>
			<br></br>
			
					<label for="email" class="control-label col-sm-2">Correo electronico:</label>
				<div class="col-sm-10">
					<input  name="email" id="email" type="text" class="form-control req"  placeholder="Ej. example@example.com"/>
					
				<br></br>
				<div class="form-group">
				<label for="password" class="control-label col-sm-2">Contraseña</label>
				<div class="col-sm-10">
				<input  name="pass" id="password" type="password" class="form-control req"  placeholder="*******************" />
				<br></br>
				 </div>
				<label for="password" class="control-label col-sm-2">Confirmar Contraseña</label>
				<div class="col-sm-10">
					<input  name="passCon" id="passCon" type="password" class="form-control req"  placeholder="*******************" />
				<br></br>
				
				</div>
				 <p><Button type="submit" class="btn btn-danger"> Guardar</button></p>
			  </div>
			</div>
			</div>
			</div>
		</form>
</section>






</body>
</html>