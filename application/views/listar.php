<html>
<head>
	<title>DataTables example</title>
	
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('#taula').dataTable();
 } );
</script>
<!-- DataTables CSS -->

<link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/media/css/demo_page.css">


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

