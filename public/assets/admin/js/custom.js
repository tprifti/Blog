$(document).ready(function () {
			$('.alert-autocloseable-success').delay(22000).fadeOut( "slow", function() {
				// Animation complete.
				$('.alert-autocloseable-success').hide();
			});
});

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
  numFiles = input.get(0).files ? input.get(0).files.length : 1,
  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
	var input_label = $(this).closest('.input-group').find('.file-input-label'),
	log = numFiles > 1 ? numFiles + ' files selected' : label;
	
	if( input_label.length) {
		if(log.length > 30){
			var newLog = log.substring(0,18) + "...";
			input_label.text(newLog);
		} else {
			input_label.text(log);
		} 
	}
	});
});