<?php
	require('conexion.php');	
	$query="SELECT ID, Nombre, Paterno, Materno, Edad FROM `integrantes_familia` ";
	$resultado=$mysqli->query($query);
?>
<html>
 <body  background="Imagenes/green.svg">
    <head>
    	
		<title>EQUIPO 4</title>
	</head>
	

	
		<?php
			require('cabecera.php');
		?>
		<center>
		<FONT  border ='1'face=Arial size=3 COLOR='#014A09' >
		<h2>Integrantes Familia</h2>
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
 					
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Nombre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Paterno</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Materno</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Edad</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>

				</tr>
				<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0">
							<?php echo $row['ID'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Nombre'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Paterno'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Materno'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Edad'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificar.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0" >
								<a href="Eliminar_Integrante.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Eliminar' name='submit' ></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUintegrantes Familia.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
		
	</body>
</html>


<?php
	require('conexion.php');	
	$query="SELECT ID,Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre FROM `ingresos(mes)` ";
	$resultado=$mysqli->query($query);
?>
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Ingresos al mes</h2>
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Enero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Febrero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Marzo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Abril</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Mayo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Junio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Julio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Agosto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Septiembre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Octubre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Noviembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Diciembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Enero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Febrero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Marzo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Abril'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Mayo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Junio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Julio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Agosto'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Septiembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Octubre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Noviembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Diciembre'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificaringresos.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_IngresoMensual.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUmes.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
	</body>
</html>



<?php
	require('conexion.php');	
	$query="SELECT ID,Ingreso_quincenal,Bonos,Aguinaldo FROM `ingresos` ";
	$resultado=$mysqli->query($query);
?>
			
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Ingresos</h2>
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Ingreso_quincenal</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Bonos</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Aguinaldo</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Ingreso_quincenal'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Bonos'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Aguinaldo'];?></td>
		

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificarin.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_Ingreso.php? ID=<?php echo $row['ID'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUingreso.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
	</body>
</html>




<?php
	require('conexion.php');	
	$query="SELECT ID, Transporte, Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre, Anual FROM `gastos_transporte`";
	$resultado=$mysqli->query($query);
?>
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Gastos de Transporte</h2>
		<td width="80" align="center"><FONT COLOR=#014A09 size=5><b>Gasto maximo de transporte</b></td>
		<td align='center'><a href="consultatransporte.php"><input type='button' value='Consultar' name='submit'></a></td>
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Transporte</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Enero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Febrero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Marzo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Abril</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Mayo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Junio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Julio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Agosto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Septiembre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Octubre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Noviembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Diciembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Anual</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
						    <td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Transporte'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Enero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Febrero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Marzo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Abril'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Mayo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Junio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Julio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Agosto'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Septiembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Octubre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Noviembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Diciembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Anual'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificartran.php? Transporte=<?php echo $row['Transporte'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_GastoTransporte.php? Transporte=<?php echo $row['Transporte'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUtransporte.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
	</body>
</html>



<?php
	require('conexion.php');	
	$query="SELECT ID, Producto, Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre, Anual FROM `gastos_supermercado` ";
	$resultado=$mysqli->query($query);
?>
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Gastos de Supermercado</h2>
		<td width="80" align="center"><FONT COLOR=#014A09 size=5><b>Gasto maximo de supermercado</b></td>
		<td align='center'><a href="Consultasuper.php"><input type='button' value='Consultar'  name='submit'></a></td>
		<br> 
		<td width="80" align="center"><FONT COLOR=#014A09 size=5><b>Suma total anual</b></td>
		<td align='center'><a href="Consultasumasuper.php"><input type='button' value='Consultar' name='submit'></a></td>
		
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Producto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Enero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Febrero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Marzo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Abril</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Mayo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Junio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Julio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Agosto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Septiembre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Octubre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Noviembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Diciembre</b></td>
						<td width="80"><FONT COLOR=#98E6A0 size=3><b>Anual</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
						    <td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Producto'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Enero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Febrero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Marzo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Abril'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Mayo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Junio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Julio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Agosto'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Septiembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Octubre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Noviembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Diciembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Anual'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificarsuper.php? Producto=<?php echo $row['Producto'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_GastosSupermercado.php? Producto=<?php echo $row['Producto'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUsuper.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
	</body>
</html>



<?php
	require('conexion.php');	
	$query="SELECT ID,Ocio,Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre,Anual FROM `gastos_ocio` ";
	$resultado=$mysqli->query($query);
?>
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Gastos Ocios</h2>
		
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Ocio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Enero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Febrero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Marzo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Abril</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Mayo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Junio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Julio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Agosto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Septiembre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Octubre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Noviembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Diciembre</b></td>
						<td width="80"><FONT COLOR=#98E6A0 size=3><b>Anual</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
						    <td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Ocio'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Enero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Febrero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Marzo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Abril'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Mayo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Junio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Julio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Agosto'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Septiembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Octubre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Noviembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Diciembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Anual'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificarocio.php? Ocio=<?php echo $row['Ocio'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_GastosOcio.php? Ocio=<?php echo $row['Ocio'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUocio.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
		</center>
		</FONT>
	</body>
</html>



<?php
	require('conexion.php');	
	$query="SELECT ID,Servicio,Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre,Anual FROM `gastos_fijos` ";
	$resultado=$mysqli->query($query);
?>
		<center>
		<FONT face=Arial size=3 COLOR='#014A09 '>
		<h2>Gastos Fijos</h2>
		<td width="80" align="center"><FONT COLOR=#014A09 size=5><b>Suma total de gastos</b></td>
		<td align='center'><a href="ConsultasServicio.php"><input type='button' value='Consultar' name='submit'></a></td>
		<table  border=1 width="1024">
			<thead>
				<tr bgcolor='#108247 ' align="center">
					<td width="80" align="center"><FONT COLOR=#98E6A0 size=3><b>ID</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Servicio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Enero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Febrero</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Marzo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Abril</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Mayo</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Junio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Julio</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Agosto</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Septiembre</b></td>
					<td width="60" align="center"><FONT COLOR=#98E6A0 size=3><b>Octubre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Noviembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Diciembre</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Anual</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Modificar</b></td>
					<td width="80"><FONT COLOR=#98E6A0 size=3><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['ID'];?></td>
						    <td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Servicio'];?></td>
							<td width="140" align="center" bgcolor="#98E6A0"><?php echo $row['Enero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Febrero'];?></td>
							<td width="60"  align="center" bgcolor="#98E6A0"><?php echo $row['Marzo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Abril'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Mayo'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Junio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Julio'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Agosto'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Septiembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Octubre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Noviembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Diciembre'];?></td>
							<td width="80"  align="center" bgcolor="#98E6A0"><?php echo $row['Anual'];?></td>
						

								
							<td align="center" bgcolor="#98E6A0">
								<a href="modificarfijos.php? Servicio=<?php echo $row['Servicio'];?>"><input type='button' value='Modificar' name='submit'></a>

							</td>
							<td align="center" bgcolor="#98E6A0">
								<a href="Eliminar_GastosFijos.php? Servicio=<?php echo $row['Servicio'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br><br>
  		<table width='1024' border='1' class='borde' bgcolor=''>
  			<tr>
  				<td align='center'><a href="NUfijos.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>

  		<h1><FONT COLOR='#014A09' face=Arial size=6>Consulta para suma total de Enero en todos los servicios</h1>
			<td align='center'><a href="Sumatotaldemes.php"><input type='button' value='Consultar' name='submit'></a></td>
		</center>
		</FONT>
		
	</body>
	<td align='center'><a href="creditos.php"><img src="Imagenes/intt.png"></a></td>
</html>







