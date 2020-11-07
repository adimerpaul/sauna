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
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  $('#nsauna').prop('value',recipient);
  modal.find('.modal-title').text('Sauna # ' + recipient)
  //modal.find('.modal-body input').val(recipient)
})
$('#detener').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  $('#nsaunac').prop('value',recipient);
  modal.find('.modal-title').text('Sauna # ' + recipient)
  //modal.find('.modal-body input').val(recipient)
})
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

   	setTimeout("mueveReloj()",1000) 
} 