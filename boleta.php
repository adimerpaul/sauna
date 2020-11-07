<?php
include 'libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
$fecha = date('Y-m-d');
$he=date("H").":".date("i").":".date("s");
$idclientesauna=$_GET['idclientesauna'];

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
            Nº: <?php echo $idclientesauna?> <br>
            RECIBO<br>
            ORIGINAL
        </b>
        </center>
        <b>Fecha:</b> <?php echo $fecha?> <br>
        
         <b>Señor:</b> <?php echo $_GET['nombre']?>  
        <b>Hora:</b> <?php echo $he?> <br>
        <table>
            <tr>
                <td><b>Cantidad</b></td>
                <td><b>Descripcion</b></td>
                <td><b>P. uni</b></td>
                <td><b>Total</b></td>
            </tr>
            <?php 
                $s=0;
                $c=mysql_query("SELECT cantidad,tipo,precio,total FROM detalle WHERE idclientesauna='$idclientesauna'");
                while ($f=mysql_fetch_array($c)) {
                    $s=$s+$f['total'];
                    if($f[0]>0)
                    echo "<tr>
                            <td>$f[0]</td>
                            <td>$f[1]</td>
                            <td>$f[2]</td>
                            <td>$f[3]</td>
                        </tr>";
                }
            ?>
        </table><br>
        <b>TOTAL:</b> <?php echo $s?> BS<br>
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
