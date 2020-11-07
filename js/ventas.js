$(document).ready(function() {
    $('#basic').editableSelect();
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]]
    });
    $( "#ci" ).keyup(function() {
  //$('#nombre').prop('value',$( "#ci" ).prop('value'));
	  $.ajax({
	                data:  {'dato':$( "#ci" ).prop('value'),'select':'nombre','tabla':'cliente','where':'ci','orden':'nombre'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#nombre").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        $("#nombre").prop('value',response);
	                }
	        });
	});
	$('#exampleModal').on('show.bs.modal', function (event) {
		$('#ci').focus();
	})

	$('#modificar').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var idclientesauna = button.data('idclientesauna') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  //ci
	  /*
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'ci','tabla':'clientesauna','where':'idclientesauna','orden':'idclientesauna'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#ci2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        $("#ci2").prop('value',response);
	                }
	        });*/
	  //nombre
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'nombre','tabla':'clientesauna','where':'idclientesauna','orden':'nombre'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#nombre2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        $("#nombre2").prop('value',response);
	                }
	        });
	  
	  //ima
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='INDIVIDUALES MAYORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#imac2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#imac2").prop('value',response);
	                        $('#ima2').prop('value',$('#imac2').prop('value')*8);
                      		sumar2();

	                }
	        });
	  //ime
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='INDIVIDUALES MENORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#imec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#imec2").prop('value',response);
	                        $('#ime2').prop('value',$('#imec2').prop('value')*4);
                      		sumar2();

	                }
	        });
	  //sma
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='SAUNAS MAYORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#smac2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#smac2").prop('value',response);
	                        $('#sma2').prop('value',$('#smac2').prop('value')*8);
                      		sumar2();

	                }
	        });
	  //sme
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='SAUNAS MENORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#smec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#smec2").prop('value',response);
	                        $('#sme2').prop('value',$('#smec2').prop('value')*4);
                      		sumar2();

	                }
	        });
	  //sima
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='SAUNAS INDIVIDUALES MAYORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#simac2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#simac2").prop('value',response);
	                        $('#sima2').prop('value',$('#simac2').prop('value')*8);
                      		sumar2();

	                }
	        });
	  //sime
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='SAUNAS INDIVIDUALES MENORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#simec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#simec2").prop('value',response);
	                        $('#sime2').prop('value',$('#simec2').prop('value')*4);
                      		sumar2();

	                }
	        });
	  //fema
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='FOSAS ESPECIALES MAYORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#femac2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#femac2").prop('value',response);
	                        $('#fema2').prop('value',$('#femac2').prop('value')*8);
                      		sumar2();

	                }
	        });
	  //feme
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='FOSAS ESPECIALES MENORES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#femec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#femec2").prop('value',response);
	                        $('#feme2').prop('value',$('#femec2').prop('value')*4);
                      		sumar2();

	                }
	        });
	  //du
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='DUCHAS' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#duc2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#duc2").prop('value',response);
	                        $('#du2').prop('value',$('#duc2').prop('value')*3);
                      		sumar2();

	                }
	        });
	  //de
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='DELEGACIONES' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#dec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#dec2").prop('value',response);
	                        $('#de2').prop('value',$('#dec2').prop('value')*2);
                      		sumar2();

	                }
	        });
	  //ad
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='ADULTO MAYOR' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#adc2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#adc2").prop('value',response);
	                        $('#ad2').prop('value',$('#adc2').prop('value')*2);
                      		sumar2();

	                }
	        });
	  //pma
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='PISINA MAYOR' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#pmac2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#pmac2").prop('value',response);
	                        $('#pma2').prop('value',$('#pmac2').prop('value')*3);
                      		sumar2();

	                }
	        });
	  //pme
	  $.ajax({
	                data:  {'dato':idclientesauna,'select':'cantidad','tabla':'detalle','where':"tipo='PISINA MENOR' AND idclientesauna",'orden':'cantidad'},
	                url:   'inc/consulta.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#pmec2").prop('value',"Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        if (response==""){ response=0}
	                        $("#pmec2").prop('value',response);
	                        $('#pme2').prop('value',$('#pmec2').prop('value')*1.5);
                      		sumar2();

	                }
	        });



	  var modal = $(this);
	  $('#idclientesauna').prop('value',idclientesauna);
	  modal.find('.modal-title').text('Venta # ' + idclientesauna)
	  //modal.find('.modal-body input').val(recipient)
	})
} );
mueveReloj();
function mueveReloj(){ 
   	momentoActual = new Date() 
   	hora = momentoActual.getHours() 
   	minuto = momentoActual.getMinutes() 
   	segundo = momentoActual.getSeconds()
   	if(hora<10)hora="0"+hora;
   	if(minuto<10)minuto="0"+minuto; 
   	if(segundo<10)segundo="0"+segundo;
   	horaImprimible = "Hora "+hora + ":" + minuto + ":" + segundo 

   	$("#hora").html(horaImprimible);

   	setTimeout("mueveReloj()",1000);
 }