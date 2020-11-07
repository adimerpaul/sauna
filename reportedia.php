<?php
include 'libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
$fecha = date('Y-m-d');
$he=date("H").":".date("i").":".date("s");
$ci=$_SESSION['ci'];
$nombre=$_SESSION['nombrei'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
    </head>
    <body onload="imprimir();">

        <center>
        <b>
            COOPERATIVA MINERA POOPO<br>
            
            REPORTE DIARIO<br>
            ORIGINAL
        </b>
        </center>
        <b>Fecha:</b> <?php echo $fecha ?> <br>
        
         <b>Usuario:</b> <?php echo $nombre ?><br>
         <b>C.I.:</b> <?php echo $ci?> <br>
        <b>Hora:</b> <?php echo $he?> <br>
        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Precio</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $total=0;  
            $fecha = date('Y-m-d');
            $c=mysql_query("SELECT idclientesauna,nombre,tipo,horainicio,total,modificado FROM clientesauna WHERE fecha='$fecha' AND ci='".$_SESSION['ci']."' ORDER BY idclientesauna DESC");
            while ($f=mysql_fetch_array($c)) {
              $total=$total+$f[4];
              echo "<tr>
                      <td>$f[0]</td>
                      <td>$f[1]</td>
                      <td>$f[2]</td>
                      <td>".substr($f[3],0,8)."</td>
                      <td>$f[4]</td>"
                      ;
            
              echo   "
                  </tr>";

            }
            ?>            
        </tbody>
    </table>
    <p ><h3> Total ventas del dia <?php echo $total; ?></h3></p>

        <br>
        <label>
        <center>
            <b>
            BIENVENIDO AL BALNEARIO<br>
            ATENCION PREFERENCIAL<br>
            Individual,duchas,piscina<br>
            porfavor usar traje de baño<br>
            NO SE ACEPTA DEVOLUCIONES<br>
            </b>
        </center>
        </label>
    </body>
</html>
<meta http-equiv="Refresh" content="0;ventas.php">
