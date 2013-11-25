<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar registros con codeIgniter</title>
<style type="text/css">
    table{
        padding: 40px;
        margin: 10px 0px 0px 50px;
    }
    th{
        padding: 15px;
        background-color: #222;
        color: #fff;
    }
    td{
        padding: 15px;
        background-color: #999999; 
    }
</style>
<script type="text/javascript">
function confirma(){
    if (confirm("¿Realmente desea eliminarlo?")){ 
        alert("El registro ha sido eliminado.") }
        else { 
        return false
    }
}
</script>
</head>
<body>
<table>
    <th>Nombre</th>
    <th>Email</th>
    <th>Asunto</th>
    <th>Mensajes</th>
    <th>Hora</th>
    <th>Fecha</th>
    <th>Eliminar</th>
    <?php
    if ($comentarios)
    {
        foreach($comentarios as $comentario)
        {
    ?>
    <tr>
        <td><?=$comentario->nombre?></td>
        <td><?=$comentario->email?></td>
        <td width="180"><?=$comentario->asunto?></td>
        <td><?=$comentario->mensajes?></td>
        <td width="80"><?=$comentario->fecha?></td>
        <td><?=$comentario->hora?></td>
        <td><a onclick="if(confirma() == false) return false" href="<?=base_url()?>eliminar/borrar_comentario/<?=$comentario->id?>">Eliminar</a></td>
    </tr>
    <?php
  }
    }else{
    ?>
    <tr>
        <td colspan="7" align="center">No hay comentarios</td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
