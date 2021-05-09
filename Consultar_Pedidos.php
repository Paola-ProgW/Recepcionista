<?php
  include_once("cabecera_Inicio.html");
  include_once("menu.html");
?>
    <section class="inicio">

    <table style="width: 100%">
      <tr>
      <td width="50%" ><h1> Consultar Pedidos </h1></td>
      <td width="50%" align="center"><h1> Artea </h1></td>
      </tr>
      <tr>
      <td><form name="formTablaGral" method="post" action="">
            <input type="hidden" name="txtClave">
            <table border="1px">
              <tr>
                <td width="20%"># Pedido</td>
                <td>Fecha</td>
              </tr>
              <tr>
                <td>1</td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td></td>
              </tr>
            </table>
          </form></td>
    </tr>
    </table>

    </section>
<?php
include_once("pie.html");
?>
