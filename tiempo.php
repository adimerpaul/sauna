<?php 
include 'inc/cabeza.php';
?>
<ol class="breadcrumb">
  <li class="active">Realizar venta</li>
</ol>
<div class="panel panel-default">
  <div class="row">
    <div class="col-xs-1">
      <p class="text-center panel-body"><span class="label label-info"># 1</span></p>
    </div>
    <div class="col-xs-11">
    <div class="panel-body">
    <div class="progress">
        <div class="progress-bar progress-bar-success" aria-valuemin="0" id="s1" aria-valuemax="100" style="width:0%;">
          0%
        </div>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-1">
      <p class="text-center panel-body"><span class="label label-info"># 2</span></p>
    </div>
    <div class="col-xs-11">
    <div class="panel-body">
    <div class="progress">
        <div class="progress-bar progress-bar-success" aria-valuemin="0" id="s2" aria-valuemax="100" style="width:0%;">
          0%
        </div>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-1">
      <p class="text-center panel-body"><span class="label label-info"># 3</span></p>
    </div>
    <div class="col-xs-11">
    <div class="panel-body">
    <div class="progress">
        <div class="progress-bar progress-bar-success" aria-valuemin="0" id="s3" aria-valuemax="100" style="width:0%;">
          0%
        </div>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-1">
      <p class="text-center panel-body"><span class="label label-info"># 4</span></p>
    </div>
    <div class="col-xs-11">
    <div class="panel-body">
    <div class="progress">
        <div class="progress-bar progress-bar-success" aria-valuemin="0" id="s4" aria-valuemax="100" style="width:0%;">
          0%
        </div>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-1">
      <p class="text-center panel-body"><span class="label label-info"># 5</span></p>
    </div>
    <div class="col-xs-11">
    <div class="panel-body">
    <div class="progress">
        <div class="progress-bar progress-bar-success" aria-valuemin="0" id="s5" aria-valuemax="100" style="width:0%;">
          0%
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
<?php
include 'inc/pie.php';
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form action="inc/isauna.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">CI</label>
            <input name="ci" type="text" class="form-control" id="ci" placeholder="CI">
            <input name="nsauna" type="text" id="nsauna" hidden>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tipo</label>
            <select class="form-control" id="tipo" name="tipo">
              <option value="SIMPLE">SIMPLE/10Bs.</option>
              <option value="DOBLE">DOBLE/15Bs.</option>
              <option value="TRIPLE">TRIPLE/20Bs.</option>
              <option value="FAMILIAR">FAMILIAR/30Bs.</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Comenzar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detener" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Detener</h4>
      </div>
      <div class="modal-body">
        <form action="inc/usauna.php" method="POST">
        <h3>Seguro de finalizar?</h3>
        <input type="text" name="nsaunac" id="nsaunac" hidden>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Terminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="ca1" hidden></div>
<div id="ca2" hidden></div>
<div id="ca3" hidden></div>
<div id="ca4" hidden></div>
<div id="ca5" hidden></div>
<script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript">
veri();
var c1=0;
var c2=0;
var c3=0;
var c4=0;
var c5=0;
function veri(){
$('#s1').css("width", c1+ "%");
$('#s1').removeClass( "progress-bar-success" );
$('#s1').removeClass( "progress-bar-warning" );
$('#s1').removeClass( "progress-bar-danger" );
$('#s2').css("width", c2+ "%");
$('#s2').removeClass( "progress-bar-success" );
$('#s2').removeClass( "progress-bar-warning" );
$('#s2').removeClass( "progress-bar-danger" );
$('#s3').css("width", c3+ "%");
$('#s3').removeClass( "progress-bar-success" );
$('#s3').removeClass( "progress-bar-warning" );
$('#s3').removeClass( "progress-bar-danger" );
$('#s4').css("width", c4+ "%");
$('#s4').removeClass( "progress-bar-success" );
$('#s4').removeClass( "progress-bar-warning" );
$('#s4').removeClass( "progress-bar-danger" );
$('#s5').css("width", c5+ "%");
$('#s5').removeClass( "progress-bar-success" );
$('#s5').removeClass( "progress-bar-warning" );
$('#s5').removeClass( "progress-bar-danger" );
$.ajax({
                data:  {'dato':'1','select':'horafinal,idclientesauna','tabla':'clientesauna','where':'nsauna','orden':'idclientesauna DESC'},
                url:   'inc/consulta.php',
                type:  'post',
                success:  function (response) {
                        $('#ca1').html(response);
                }
        });
$.ajax({
                data:  {'dato':'2','select':'horafinal,idclientesauna','tabla':'clientesauna','where':'nsauna','orden':'idclientesauna DESC'},
                url:   'inc/consulta.php',
                type:  'post',
                success:  function (response) {
                        $('#ca2').html(response);
                }
        });
$.ajax({
                data:  {'dato':'3','select':'horafinal,idclientesauna','tabla':'clientesauna','where':'nsauna','orden':'idclientesauna DESC'},
                url:   'inc/consulta.php',
                type:  'post',
                success:  function (response) {
                        $('#ca3').html(response);
                }
        });
$.ajax({
                data:  {'dato':'4','select':'horafinal,idclientesauna','tabla':'clientesauna','where':'nsauna','orden':'idclientesauna DESC'},
                url:   'inc/consulta.php',
                type:  'post',
                success:  function (response) {
                        $('#ca4').html(response);
                }
        });
$.ajax({
                data:  {'dato':'5','select':'horafinal,idclientesauna','tabla':'clientesauna','where':'nsauna','orden':'idclientesauna DESC'},
                url:   'inc/consulta.php',
                type:  'post',
                success:  function (response) {
                        $('#ca5').html(response);
                }
        });
h1=$('#ca1').html();
h2=$('#ca2').html();
h3=$('#ca3').html();
h4=$('#ca4').html();
h5=$('#ca5').html();
ss1=parseInt(parseInt(h1.substring(0,2))*60*60+parseInt(h1.substring(3,5))*60+ parseInt( h1.substring(6,8)));
ss2=parseInt(parseInt(h2.substring(0,2))*60*60+parseInt(h2.substring(3,5))*60+ parseInt( h2.substring(6,8)));
ss3=parseInt(parseInt(h3.substring(0,2))*60*60+parseInt(h3.substring(3,5))*60+ parseInt( h3.substring(6,8)));
ss4=parseInt(parseInt(h4.substring(0,2))*60*60+parseInt(h4.substring(3,5))*60+ parseInt( h4.substring(6,8)));
ss5=parseInt(parseInt(h5.substring(0,2))*60*60+parseInt(h5.substring(3,5))*60+ parseInt( h5.substring(6,8)));

momentoActual = new Date() 
sa=momentoActual.getHours()*60*60+momentoActual.getMinutes()*60+momentoActual.getSeconds();
ti1=ss1-sa;
ti2=ss2-sa;
ti3=ss3-sa;
ti4=ss4-sa;
ti5=ss5-sa;
if(ti1<0)ti1=0;
if(ti2<0)ti2=0;
if(ti3<0)ti3=0;
if(ti4<0)ti4=0;
if(ti5<0)ti5=0;
c1=ti1*100/3600;
c2=ti2*100/3600;
c3=ti3*100/3600;
c4=ti4*100/3600;
c5=ti5*100/3600;
$('#s1').html((c1+"").substring(0,5)+"%");
$('#s2').html((c2+"").substring(0,5)+"%");
$('#s3').html((c3+"").substring(0,5)+"%");
$('#s4').html((c4+"").substring(0,5)+"%");
$('#s5').html((c5+"").substring(0,5)+"%");

if(parseInt(c1)>=50 && parseInt(c1)<=100)
$('#s1').addClass("progress-bar-success");
else if(parseInt(c1)>=20 && parseInt(c1)<50)
$('#s1').addClass("progress-bar-warning");
else if(parseInt(c1)>0 && parseInt(c1)<20)
$('#s1').addClass("progress-bar-danger");

if(parseInt(c2)>=50 && parseInt(c2)<=100)
$('#s2').addClass("progress-bar-success");
else if(parseInt(c2)>=20 && parseInt(c2)<50)
$('#s2').addClass("progress-bar-warning");
else if(parseInt(c2)>0 && parseInt(c2)<20)
$('#s2').addClass("progress-bar-danger");

if(parseInt(c3)>=50 && parseInt(c3)<=100)
$('#s3').addClass("progress-bar-success");
else if(parseInt(c3)>=20 && parseInt(c3)<50)
$('#s3').addClass("progress-bar-warning");
else if(parseInt(c3)>0 && parseInt(c3)<20)
$('#s3').addClass("progress-bar-danger");

if(parseInt(c4)>=50 && parseInt(c4)<=100)
$('#s4').addClass("progress-bar-success");
else if(parseInt(c4)>=20 && parseInt(c4)<50)
$('#s4').addClass("progress-bar-warning");
else if(parseInt(c4)>0 && parseInt(c4)<20)
$('#s4').addClass("progress-bar-danger");

if(parseInt(c5)>=50 && parseInt(c5)<=100)
$('#s5').addClass("progress-bar-success");
else if(parseInt(c5)>=20 && parseInt(c5)<50)
$('#s5').addClass("progress-bar-warning");
else if(parseInt(c5)>0 && parseInt(c5)<20)
$('#s5').addClass("progress-bar-danger");

setTimeout("veri()",100) 
}
</script>