$(document).ready(function(){
	$(document).on('click', 'button.delete', function(){	// Delete 
	    var el = this;
		var id = this.id;
		var splitid = id.split("_");
		// Delete id
		var deleteid = splitid[1];
		// Delete id
		// AJAX Request
		$.ajax({
			url: 'add_post.php',
			type: 'POST',
			data: { stergeId:id, actiune: 'sterge' },
			success: function(response){

				// Removing row from HTML Table
				$(el).closest('tr').css('background','tomato');
				$(el).closest('tr').fadeOut(800, function(){ 
					$(el).remove();
				});
			}
		});
	});
});

