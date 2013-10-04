<html>
<head>
	<title>DataTables example</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



</head>
<body>
<table border=4  id="taula"  class="table">
<thead>
        <tr>
            <th>ID</th>
            <th>Nom Usuari</th>
            <th>Edat</th>
            <th>Poblacio</th>
            <th>Provincia</th>
            <th>DNI</th>
            <th>Estat civil</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
			<th>1</th>
            <td>Ana Maria</td>
            <td>20</td>
            <td>Tarragona</td>
            <td>Tarragona</td>
            <td>45874</td>
            <td>Soltera</td>
            <td><a href="modificar/1"><button>Modifica</button></a></td>
            <td><a href="eliminar/1"><button>Borra</button></a></td>
        </tr>
        <tr>
			<th>2</th>
            <td>Jony</td>
            <td>30</td>
            <td>Valencia</td>
            <td>Valencia</td>
            <td>65333</td>
            <td>Casado</td>
            <td><a href="modificar/2"><button>Modifica</button></a></td>
            <td><a href="eliminar/2"><button>Borra</button></a></td>
        </tr>
        <tr>
				<th>3</th>	
				<td>Ernesto</td>
				<td>40</td>
				<td>Barcelona</td>
				<td>Barcelona</td>
				<td>6644456</td>
				<td>Soltero</td>
				<td><a href="modificar/3"><button>Modifica</button></a></td>
				<td><a href="eliminar/3"><button>Borra</button></a></td>
		</tr>
       
    </tbody>
</table>

<br>
<br>
<a href="crear"><button>Crear</button></a>

</body>

</html>

