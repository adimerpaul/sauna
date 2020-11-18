<?php
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
?>
<style type="text/css">
  input[type="number"],.total{
   width:50px;
  }
  tr,td,.total{
    padding: 0px;
    border:0px;
    margin: 0px;
  }
</style>
<link rel="stylesheet" type="text/css" href="css/jquery-editable-select.min.css">
<script type="text/javascript" src="js/jquery-editable-select.min.js"></script>
<ol class="breadcrumb">
  <li class="active">Realizar venta </li>
</ol>
<div class="panel panel-default">
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" autofocus>Agregar</button>
  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Precio</th>
                <th>Opciones</th>
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
                      <td>$f[4]</td>
                      <td>
                        <a href='boleta.php?nombre=$f[1]&idclientesauna=$f[0]' type='button' class='btn btn-info btn-xs'>
                          <span class='glyphicon glyphicon-print'></span>Imprimir
                        </a>";
              if($f[5]=="NO MODIFICADO")
              echo "  <button type='button' class='btn btn-warning btn-xs' data-toggle='modal'  data-target='#modificar' data-idclientesauna='$f[0]'>
                          <span class='glyphicon glyphicon-pencil'></span>Modificar
                        </button>";
              echo   "</td>
                  </tr>";

            }
            ?>
        </tbody>
    </table>
    <p ><h3> Total ventas del dia <?php echo $total; ?></h3></p>
</div>
<?php
include 'inc/pie.php';
?>
<!--Insertar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"  onclick="col()">Atencion</h4>
      </div>
      <div class="modal-body">
        <form action="inc/iventa.php" class="form-horizontal" method="POST">
          <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <select id="basic" name="nombre" class="form-control" required>
                <?php
                  $c=mysql_query("SELECT nombre FROM clientesauna GROUP BY nombre ORDER BY nombre");
                  while ($f=mysql_fetch_array($c)) {
                    echo "<option value='$f[0]'>$f[0]</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Tipo</th>
                  <th>Cantidad</th>
                  <th>Total</th>
              </tr>
              </thead>
              <tr>
                <script type="text/javascript">
                  function sumar(){
                    $('#total').prop(
                      'value',
                        parseFloat($('#ima').prop('value'))+
                        parseFloat($('#ime').prop('value'))+
                        parseFloat($('#sma').prop('value'))+
                        parseFloat($('#sme').prop('value'))+
                        parseFloat($('#sima').prop('value'))+
                        parseFloat($('#sime').prop('value'))+
                        parseFloat($('#fema').prop('value'))+
                        parseFloat($('#feme').prop('value'))+
                        parseFloat($('#du').prop('value'))+
                        parseFloat($('#de').prop('value'))+
                        parseFloat($('#ad').prop('value'))+
                        parseFloat($('#pma').prop('value'))+
                        parseFloat($('#pme').prop('value'))
                      );
                  }
                </script>
                <td>INDIVIDUALES MAYORES/5</td>
                <td><input type="number" name="imac" maxlength="4" value="0" id="imac"></td>
                <td><input class="total" type="text" name="ima" maxlength="4" value="0" id="ima"></td>
                <script type="text/javascript">
                  $('#imac').keyup(function(){
                      $('#ima').prop('value',$('#imac').prop('value')*5);
                      sumar();
                    });
                  $('#imac').change(function(){
                      $('#ima').prop('value',$('#imac').prop('value')*5);
                      sumar();
                  });
                </script>
              </tr>
              <tr>
                <td>INDIVIDUALES MENORES/2.5</td>
                <td><input type="number" name="imec" maxlength="4" value="0" id="imec"></td>
                <td><input class="total" type="text" name="ime" maxlength="4" value="0" id="ime"></td>
                <script type="text/javascript">
                  $('#imec').keyup(function(){
                      $('#ime').prop('value',$('#imec').prop('value')*2.5);
                      sumar();
                  });
                  $('#imec').change(function(){
                      $('#ime').prop('value',$('#imec').prop('value')*2.5);
                      sumar();
                  });
                </script>
              </tr>
              <tr>
                <td>SAUNAS MAYORES/8</td>
                <td><input type="number" name="smac" maxlength="4" value="0" id="smac"></td>
                <td><input class="total" type="text" name="sma" maxlength="4" value="0" id="sma"></td>
                <script type="text/javascript">
                  $('#smac').keyup(function(){
                      $('#sma').prop('value',$('#smac').prop('value')*8);
                      sumar();
                    });
                  $('#smac').change(function(){
                      $('#sma').prop('value',$('#smac').prop('value')*8);
                    sumar();
                  });
                </script>
              </tr>
              <tr>
                <td>SAUNAS MENORES/4</td>
                <td><input type="number" name="smec" maxlength="4" value="0" id="smec"></td>
                <td><input class="total" type="text" name="sme" maxlength="4" value="0" id="sme"></td>
                <script type="text/javascript">
                  $('#smec').keyup(function(){
                      $('#sme').prop('value',$('#smec').prop('value')*4);
                      sumar();
                    });
                  $('#smec').change(function(){
                      $('#sme').prop('value',$('#smec').prop('value')*4);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>SAUNAS INDIVIDUALES MAYORES/8</td>
                <td><input type="number" name="simac" maxlength="4" value="0" id="simac"></td>
                <td><input class="total" type="text" name="sima" maxlength="4" value="0" id="sima"></td>
                <script type="text/javascript">
                  $('#simac').keyup(function(){
                      $('#sima').prop('value',$('#simac').prop('value')*8);
                      sumar();
                    });
                  $('#simac').change(function(){
                      $('#sima').prop('value',$('#simac').prop('value')*8);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>SAUNAS INDIVIDUALES MENORES/4</td>
                <td><input type="number" name="simec" maxlength="4" value="0" id="simec"></td>
                <td><input class="total" type="text" name="sime" maxlength="4" value="0" id="sime"></td>
                <script type="text/javascript">
                  $('#simec').keyup(function(){
                      $('#sime').prop('value',$('#simec').prop('value')*4);
                      sumar();
                    });
                  $('#simec').change(function(){
                      $('#sime').prop('value',$('#simec').prop('value')*4);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>FOSAS ESPECIALES MAYORES/8</td>
                <td><input type="number" name="femac" maxlength="4" value="0" id="femac"></td>
                <td><input class="total" type="text" name="fema" maxlength="4" value="0" id="fema"></td>
                <script type="text/javascript">
                  $('#femac').keyup(function(){
                      $('#fema').prop('value',$('#femac').prop('value')*8);
                      sumar();
                    });
                  $('#femac').change(function(){
                      $('#fema').prop('value',$('#femac').prop('value')*8);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>FOSAS ESPECIALES MENORES/4</td>
                <td><input type="number" name="femec" maxlength="4" value="0" id="femec"></td>
                <td><input class="total" type="text" name="feme" maxlength="4" value="0" id="feme"></td>
                <script type="text/javascript">
                  $('#femec').keyup(function(){
                      $('#feme').prop('value',$('#femec').prop('value')*4);
                      sumar();
                    });
                  $('#femec').change(function(){
                      $('#feme').prop('value',$('#femec').prop('value')*4);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>DUCHAS/3</td>
                <td><input type="number" name="duc" maxlength="4" value="0" id="duc"></td>
                <td><input class="total" type="text" name="du" maxlength="4" value="0" id="du"></td>
                <script type="text/javascript">
                  $('#duc').keyup(function(){
                      $('#du').prop('value',$('#duc').prop('value')*3);
                      sumar();
                    });
                  $('#duc').change(function(){
                      $('#du').prop('value',$('#duc').prop('value')*3);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>DELEGACIONES/2</td>
                <td><input type="number" name="dec" maxlength="4" value="0" id="dec"></td>
                <td><input class="total" type="text" name="de" maxlength="4" value="0" id="de"></td>
                <script type="text/javascript">
                  $('#dec').keyup(function(){
                      $('#de').prop('value',$('#dec').prop('value')*2);
                      sumar();
                    });
                  $('#dec').change(function(){
                      $('#de').prop('value',$('#dec').prop('value')*2);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>ADULTO MAYOR/2</td>
                <td><input type="number" name="adc" maxlength="4" value="0" id="adc"></td>
                <td><input class="total" type="text" name="ad" maxlength="4" value="0" id="ad"></td>
                <script type="text/javascript">
                  $('#adc').keyup(function(){
                      $('#ad').prop('value',$('#adc').prop('value')*2);
                      sumar();
                    });
                  $('#adc').change(function(){
                      $('#ad').prop('value',$('#adc').prop('value')*2);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>PISINA MAYORES/3</td>
                <td><input type="number" name="pmac" maxlength="4" value="0" id="pmac"></td>
                <td><input class="total" type="text" name="pma" maxlength="4" value="0" id="pma"></td>
                <script type="text/javascript">
                  $('#pmac').keyup(function(){
                      $('#pma').prop('value',$('#pmac').prop('value')*3);
                      sumar();
                    });
                  $('#pmac').change(function(){
                      $('#pma').prop('value',$('#pmac').prop('value')*3);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td>PISINA MENOR/1.5</td>
                <td><input type="number" name="pmec" maxlength="4" value="0" id="pmec"></td>
                <td><input class="total" type="text" name="pme" maxlength="4" value="0" id="pme"></td>
                <script type="text/javascript">
                  $('#pmec').keyup(function(){
                      $('#pme').prop('value',$('#pmec').prop('value')*1.5);
                      sumar();
                    });
                  $('#pmec').change(function(){
                      $('#pme').prop('value',$('#pmec').prop('value')*1.5);
                      sumar();
                    });
                </script>
              </tr>
              <tr>
                <td></td>
                <td>TOTAL</td>
                <td><input type="text" name="total" value="" id="total" class="total" required=""></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!--modificar-->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Atencion</h4>
      </div>
      <div class="modal-body">
        <form action="inc/uventa.php" class="form-horizontal" method="POST">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input class="form-control" id="nombre2" placeholder="Nombre" name="nombre" required disabled>
              <input id="idclientesauna" name="idclientesauna" required hidden>
            </div>
          </div>
          <div class="form-group">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Tipo</th>
                  <th>Cantidad</th>
                  <th>Total</th>
              </tr>
              </thead>
              <tr>
                <script type="text/javascript">
                  function sumar2(){
                    $('#total2').prop('value',
                      parseFloat($('#ima2').prop('value'))+
                      parseFloat($('#ime2').prop('value'))+
                      parseFloat($('#sma2').prop('value'))+
                      parseFloat($('#sme2').prop('value'))+
                      parseFloat($('#sima2').prop('value'))+
                      parseFloat($('#sime2').prop('value'))+
                      parseFloat($('#fema2').prop('value'))+
                      parseFloat($('#feme2').prop('value'))+
                      parseFloat($('#du2').prop('value'))+
                      parseFloat($('#de2').prop('value'))+
                      parseFloat($('#ad2').prop('value'))+
                      parseFloat($('#pma2').prop('value'))+
                      parseFloat($('#pme2').prop('value'))
                      );
                  }
                </script>
                <td>INDIVIDUALES MAYORES/5</td>
                <td><input type="number" name="imac" maxlength="4" value="0" id="imac2"></td>
                <td><input class="total" type="text" name="ima" maxlength="4" value="0" id="ima2"></td>
                <script type="text/javascript">
                  $('#imac2').keyup(function(){
                      $('#ima2').prop('value',$('#imac2').prop('value')*5);
                      sumar2();
                    });
                  $('#imac2').change(function(){
                      $('#ima2').prop('value',$('#imac2').prop('value')*5);
                      sumar2();
                  });
                </script>
              </tr>
              <tr>
                <td>INDIVIDUALES MENORES/2.5</td>
                <td><input type="number" name="imec" maxlength="4" value="0" id="imec2"></td>
                <td><input class="total" type="text" name="ime" maxlength="4" value="0" id="ime2"></td>
                <script type="text/javascript">
                  $('#imec2').keyup(function(){
                      $('#ime2').prop('value',$('#imec2').prop('value')*2.5);
                      sumar2();
                  });
                  $('#imec2').change(function(){
                      $('#ime2').prop('value',$('#imec2').prop('value')*2.5);
                      sumar2();
                  });
                </script>
              </tr>
              <tr>
                <td>SAUNAS MAYORES/8</td>
                <td><input type="number" name="smac" maxlength="4" value="0" id="smac2"></td>
                <td><input class="total" type="text" name="sma" maxlength="4" value="0" id="sma2"></td>
                <script type="text/javascript">
                  $('#smac2').keyup(function(){
                      $('#sma2').prop('value',$('#smac2').prop('value')*8);
                      sumar2();
                    });
                  $('#smac2').change(function(){
                      $('#sma2').prop('value',$('#smac2').prop('value')*8);
                    sumar2();
                  });
                </script>
              </tr>
              <tr>
                <td>SAUNAS MENORES/4</td>
                <td><input type="number" name="smec" maxlength="4" value="0" id="smec2"></td>
                <td><input class="total" type="text" name="sme" maxlength="4" value="0" id="sme2"></td>
                <script type="text/javascript">
                  $('#smec2').keyup(function(){
                      $('#sme2').prop('value',$('#smec2').prop('value')*4);
                      sumar2();
                    });
                  $('#smec2').change(function(){
                      $('#sme2').prop('value',$('#smec2').prop('value')*4);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>SAUNAS INDIVIDUALES MAYORES/8</td>
                <td><input type="number" name="simac" maxlength="4" value="0" id="simac2"></td>
                <td><input class="total" type="text" name="sima" maxlength="4" value="0" id="sima2"></td>
                <script type="text/javascript">
                  $('#simac2').keyup(function(){
                      $('#sima2').prop('value',$('#simac2').prop('value')*8);
                      sumar2();
                    });
                  $('#simac2').change(function(){
                      $('#sima2').prop('value',$('#simac2').prop('value')*8);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>SAUNAS INDIVIDUALES MENORES/4</td>
                <td><input type="number" name="simec" maxlength="4" value="0" id="simec2"></td>
                <td><input class="total" type="text" name="sime" maxlength="4" value="0" id="sime2"></td>
                <script type="text/javascript">
                  $('#simec2').keyup(function(){
                      $('#sime2').prop('value',$('#simec2').prop('value')*4);
                      sumar2();
                    });
                  $('#simec2').change(function(){
                      $('#sime2').prop('value',$('#simec2').prop('value')*4);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>FOSAS ESPECIALES MAYORES/8</td>
                <td><input type="number" name="femac" maxlength="4" value="0" id="femac2"></td>
                <td><input class="total" type="text" name="fema" maxlength="4" value="0" id="fema2"></td>
                <script type="text/javascript">
                  $('#femac2').keyup(function(){
                      $('#fema2').prop('value',$('#femac2').prop('value')*8);
                      sumar2();
                    });
                  $('#femac2').change(function(){
                      $('#fema2').prop('value',$('#femac2').prop('value')*8);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>FOSAS ESPECIALES MENORES/4</td>
                <td><input type="number" name="femec" maxlength="4" value="0" id="femec2"></td>
                <td><input class="total" type="text" name="feme" maxlength="4" value="0" id="feme2"></td>
                <script type="text/javascript">
                  $('#femec2').keyup(function(){
                      $('#feme2').prop('value',$('#femec2').prop('value')*4);
                      sumar2();
                    });
                  $('#femec2').change(function(){
                      $('#feme2').prop('value',$('#femec2').prop('value')*4);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>DUCHAS/3</td>
                <td><input type="number" name="duc" maxlength="4" value="0" id="duc2"></td>
                <td><input class="total" name="du" maxlength="4" value="0" id="du2"></td>
                <script type="text/javascript">
                  $('#duc2').keyup(function(){
                      $('#du2').prop('value',$('#duc2').prop('value')*3);
                      sumar2();
                    });
                  $('#duc2').change(function(){
                      $('#du2').prop('value',$('#duc2').prop('value')*3);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>DELEGACIONES/2</td>
                <td><input type="number" name="dec" maxlength="4" value="0" id="dec2"></td>
                <td><input class="total" type="text" name="de" maxlength="4" value="0" id="de2"></td>
                <script type="text/javascript">
                  $('#dec2').keyup(function(){
                      $('#de2').prop('value',$('#dec2').prop('value')*2);
                      sumar2();
                    });
                  $('#dec2').change(function(){
                      $('#de2').prop('value',$('#dec2').prop('value')*2);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>ADULTO MAYOR/2</td>
                <td><input type="number" name="adc" maxlength="4" value="0" id="adc2"></td>
                <td><input class="total" type="text" name="ad" maxlength="4" value="0" id="ad2"></td>
                <script type="text/javascript">
                  $('#adc2').keyup(function(){
                      $('#ad2').prop('value',$('#adc2').prop('value')*2);
                      sumar2();
                    });
                  $('#adc2').change(function(){
                      $('#ad2').prop('value',$('#adc2').prop('value')*2);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>PISINA MAYORES/3</td>
                <td><input type="number" name="pmac2" maxlength="4" value="0" id="pmac2"></td>
                <td><input class="total" type="text" name="pma2" maxlength="4" value="0" id="pma2"></td>
                <script type="text/javascript">
                  $('#pmac2').keyup(function(){
                      $('#pma2').prop('value',$('#pmac2').prop('value')*3);
                      sumar2();
                    });
                  $('#pmac2').change(function(){
                      $('#pma2').prop('value',$('#pmac2').prop('value')*3);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td>PISINA MENOR/1.5</td>
                <td><input type="number" name="pmec2" maxlength="4" value="0" id="pmec2"></td>
                <td><input class="total" type="text" name="pme2" maxlength="4" value="0" id="pme2"></td>
                <script type="text/javascript">
                  $('#pmec2').keyup(function(){
                      $('#pme2').prop('value',$('#pmec2').prop('value')*1.5);
                      sumar2();
                    });
                  $('#pmec2').change(function(){
                      $('#pme2').prop('value',$('#pmec2').prop('value')*1.5);
                      sumar2();
                    });
                </script>
              </tr>
              <tr>
                <td></td>
                <td>TOTAL</td>
                <td><input type="text" name="total" value="" id="total2" class="total" required></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/ventas.js"></script>
