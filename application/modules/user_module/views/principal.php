<html>
		
	
	<head>
		<title>Pagina de codeigniter</title>
		<?php include("boot.txt"); ?>
		
	</head>
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
          </button>
          <a href="#" class="navbar-brand">Menu de Acceso</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div>
      </div>
      </div>
<div>
</br>
	<h2>Menu de usuarios</h2>
		<p>-----------------------</p>
		<p>INDICE :</p>
		<p>Usuarios</p>
		<ul>
			<li><a href="/codeigniterhelloworld/index.php/user_module/usuarios/crear"><?php echo$this->lang->line('crear');?></a></li>
			<li><a href="/codeigniterhelloworld/index.php/user_module/usuarios/inserta">Insertar</a></li>
			<li><a href="/codeigniterhelloworld/index.php/user_module/usuarios/listar">Listar</a></li>
			<li><a href="/codeigniterhelloworld/index.php/user_module/usuarios/modificar">Modificar</a></li>
			<li><a href="/codeigniterhelloworld/index.php/user_module/usuarios/eliminar">Eliminar</a></li>
		</ul>
		<p>
			Configuracion</p>
		<ul>
			<li><a href="/codeigniterhelloworld/index.php/user_module/configuracion/changepassword">Canviar contraseña</a></li>
			<li><a href="/codeigniterhelloworld/index.php/user_module/configuracion/salir">Salir</a></li>
		</ul>
	</center>
</html>
