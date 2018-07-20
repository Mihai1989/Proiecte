function filter_data(){
	var filter_input = $('#filter_input').val();
	// alert(filter_input);
	$.ajax({
		'type': 'POST',
		'url' : 'get_data.php',
		'data' : 'filter_input='+filter_input,	
		success : function(result){
			$('#userData').html(result);
		}
	});
}