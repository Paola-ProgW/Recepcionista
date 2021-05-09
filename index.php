<?php
include_once("modelo\Usuario.php");
session_start();
$sErr = "";



	if ($sErr == ""){
		include_once("cabecera_Inicio.html");
	}
	else{
		header("Location: error.php?sErr=".$sErr);
		exit();
	}
 ?>
        <section class="inicio">
			<center><h1> Venta Mostrador</h1></center>
			<table style="width: 100%" cellspacing="40">
								<tr height="100px">
									<td align="center" bgcolor="#F0E68C"><a href="Tomar_pedido.ph"><h1>Tomar pedido</h1></a></td>
									<td align="center" bgcolor="#87CEFA"><a href="Generar_Ticket.php"><h1>Generar ticket<h1></a></td>
								  <td align="center" bgcolor="#F0E68C"><a href="Genear_Factura.php"><h1>Generar factura<h1></a></td>
								</tr>
								<tr height="100px">
									<td align="center" bgcolor="#87CEFA"><a href="Consultar_Pedidos.php"><h1>Consular Pedidos<h1></a></td>
									<td></td>
									<td align="center" bgcolor="#87CEFA"><a href="Historial_Ventas.php"><h1>Historial ventas</h1></a></td>
								</tr>
							</table>
		</section>
<?php
include_once("pie.html");
?>
