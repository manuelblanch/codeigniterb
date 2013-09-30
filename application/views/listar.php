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
<table border=4  id="taula"  class="display">
<thead>
        <tr>
            <th>Nom Usuari</th>
            <th>Edat</th>
            <th>Poblacio</th>
            <th>Provincia</th>
            <th>DNI</th>
            <th>Estat civil</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ana Maria</td>
            <td>20</td>
            <td>Tarragona</td>
            <td>Tarragona</td>
            <td>45874</td>
            <td>Soltera</td>
        </tr>
        <tr>
            <td>Jony</td>
            <td>30</td>
            <td>Valencia</td>
            <td>Valencia</td>
            <td>65333</td>
            <td>Casado</td>
        </tr>
       
    </tbody>
</table>

</body>

</html>

