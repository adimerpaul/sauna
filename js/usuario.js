$(document).ready(function() {
    $('#example').DataTable();
    $('#modificar').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var ci = button.data('ci') 
	  var nombre = button.data('nombre') 
	  var nombrei = button.data('nombrei') 
	  var clavei = button.data('clavei') 
	  var tipo = button.data('tipo')
	  var estado = button.data('estado') 
	  var modal = $(this)
	  modal.find('.modal-title').text('Modificar  ' + ci)
	  modal.find('.modal-body #ci').val(ci)
	  modal.find('.modal-body #nombre').val(nombre)
	  modal.find('.modal-body #nombrei').val(nombrei)
	  modal.find('.modal-body #clavei').val(clavei)
	})
} );