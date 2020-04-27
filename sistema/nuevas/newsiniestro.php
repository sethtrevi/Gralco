<?php 
include("../ajax/config.php");
include("../ajax/funciones.php");
include("../ajax/secure.php");
$cnx=conectar();
$mensaje="";

$permisos=strstr($_SESSION['perm'], 'agregar');
$zonas=strstr($_SESSION['zonas'], 'polizas');
if (($permisos!="") && ($zonas!=""))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gralco</title>
<link rel="stylesheet" href="../estilos/style.css" type="text/css" media="screen" />
</head>

<body>
	<div id="contenedor">
	  <?php  include("../menu2.php"); ?>
	</div>	

<div id="contenido">
		<p>Nuevo siniestro</p>
			<form id="formRegistro" action="../add/addsiniestro.php" method="post" enctype="multipart/form-data">
			<table width="950" align="center" border="0" cellspacing="0" cellpadding="0">
				<tr valign="top">
                	<td width="17"></td>
					<td width="138"><font color="#FFFFFF">N&uacute;mero de siniestro:</font></td>
                    <td width="306"><input type="text" name="numero" size="20" tabindex="1" /></td>
                    <td width="15"></td>
                    <td width="77"><font color="#FFFFFF">Ramo:</font></td>
                    <td width="397"><select name="categoria" size="1" id="categoria" tabindex="2" >
									<option selected="selected" value="autos">Autos</option>
									<option value="gm">Gastos médicos</option>
									<option value="vida">Vida</option>
                                    <option value="daños">Daños</option>
                                    <option value="camiones">Camiones</option>
									</select></td>
                </tr>
                <tr>
                	<td colspan="6">&nbsp;</td>
                </tr>
                <tr valign="top">
                	<td width="17"></td>
					<td width="138"><font color="#FFFFFF">Fecha del siniestro:</font></td>
      <td width="306"><select name="dia" size="1" tabindex="3">
									<?php  for ($a=1;$a<=31;$a++)
										{
											if ($a==1)
											{
									?>
											<option selected="selected" value="<?php  echo $a; ?>"><?php  echo $a; ?></option>
									<?php 
											}
											else
												{
									?>
											<option value="<?php  echo $a; ?>"><?php  echo $a; ?></option>
									<?php 
												}
										}
									?>
									</select>
<select name="mes" size="1" tabindex="4">
									<?php  for ($a=1;$a<=12;$a++)
										{
											if ($a==1)
											{
									?>
											<option selected="selected" value="<?php  echo $a; ?>"><?php  echo $a; ?></option>
									<?php 
											}
											else
												{
									?>
											<option value="<?php  echo $a; ?>"><?php  echo $a; ?></option>
									<?php 
												}
										}
									?>
									</select>&nbsp;<input type="text" size="6" id="anio" name="anio" maxlength="4" tabindex="5" /></td>
                    <td width="15"></td>
                    <td width="77"><font color="#FFFFFF">Status:</font></td>
                    <td width="397"><select name="status" size="1" id="status" tabindex="6">
									<option selected="selected" value="Pendiente">Pendiente</option>
									<option value="Terminado">Terminado</option>
									</select></td>
                </tr>
                <tr>
                	<td colspan="6">&nbsp;</td>
                </tr>
                <tr valign="top">
                	<td width="17"></td>
					<td width="138"><font color="#FFFFFF">Observaciones:</font></td>
     				<td width="306"><textarea cols="25" rows="5" name="observaciones" tabindex="7"></textarea></td>
                    <td width="15"></td>
                    <td width="77"><font color="#FFFFFF">Archivo:</font></td>
                    <td width="397"><input type="file" name="archivo" size="29" tabindex="8"/></td>
                </tr>
                <tr>
                	<td colspan="6">&nbsp;</td>
                </tr>
                <tr>
                	<td colspan="6" align="center" valign="middle"><div id="btn"><input type="submit" name="submit" value="Guardar" /></div></td>
                </tr>
            </table>
			</form>
	</div>
</body>
</html>
<?php }
	else
	{
		header("LOCATION: ../index.php");
		exit();
	}
 //Permiso para agregar ?>