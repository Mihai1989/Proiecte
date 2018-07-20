<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<!-- Website CSS style -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Jquery -->

	</head>
	<body>
		<div class = "row">
			<div class = "col-md-3"></div>
			<div class = "col-md-6 well">
				<h1 class = "text-primary">GoGle</h1>
				<p class="description">Un motor de cautare referire la descrierea masinilor de top in gama masinilor de lux</p>
				<br>
				<form align="center" method="POST">
					<input type="text" name="filter_input" id="filter_input">
					<input type="button" name="search" value="Search" onclick="filter_data();">
				</form>
				<hr style = "border-top:1px dotted #000;"/>
				<button class = "btn  btn-primary" id = "btn_post"><span class = "glyphicon glyphicon-plus"></span> Creat your car details</button>
				<button style = "display:none;" class = "btn  btn-danger" id = "btn_close"><span class = "glyphicon glyphicon-remove"></span> Close</button>
				<br /><br />
				<div  style = "display:none;" id = "post_form" class = "col-md-12">
					<!-- Start the form -->
					<form id="form"> 
						<h1>GoGle</h1>
						<p>Un motor de cautare referire la descrierea masinilor de top in gama masinilor de lux</p>
						
						<div class="form-group">
							<label for="name">Your Title Car</label>
							<br />
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<input type="text" id="title" name="title" placeholder="Enter Title Car"/>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Your Descrtiption about Car</label>
							<br />
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<input type="text" id="description" name="description" placeholder="Enter Descrtiption about Car"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Your Url about car</label>
							<br />
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								<input type="email" id="url" name="url" placeholder="Enter Your Url about car"/>
							</div>
						</div>
						<button type="button" id="add_post">Post</button>
					</form>
					<!-- End the form -->
					<br /><br />
				</div>
				<table class="table table-bordered"  border="1" align="center" cellpadding="5" cellspacing="5">
			        <thead>
			            <tr>
			                <th>Title</th>
			                <th>Description</th>
			                <th>Url</th>
			                <th>Delete</th>
			            </tr>
			        </thead>
			        <tbody id="userData">
			            <?php
							$sql = mysqli_query($con, "select * from date_gogle");
							$num_rows = mysqli_num_rows($sql);
							while($result=mysqli_fetch_array($sql)){
							$title = ($result['title'] == 1);
							?>
			            <tr>
			                <td><?php echo $result['title']; ?></td>
			                <td><?php echo $result['description']; ?></td>
			                <td><a href=""><?php echo $result['url']; ?></a></td> 
			                <td><button class='delete btn btn-danger' id='<?php echo htmlspecialchars($result['id']); ?>'>Sterge</button></td>
			            </tr>
							<?php } ?>
			        </tbody>
				</table>
				<div id = "result">	
		
				</div>	
			</div>
		</div>
	</body>
	<script src = "js/jquery-3.1.1.js"></script>	
	<script type = "text/javascript">
		$(document).ready(function(){
		displayResult();
		/*	ADDING POST	*/	
			$('#btn_post').on('click', function(){
				$('#post_form').slideDown();
				$('#btn_close').show();
				$(this).hide();
				$('#post').val('');
			});
			
			$('#btn_close').on('click', function(){
				$('#post_form').slideUp();
				$('#btn_post').show();
				$(this).hide();
			});
			
			$('#add_post').on('click', function(){
				if($('#title').val() == "" || $('#description').val() == "" || $('#url').val() == ""){
					alert('Please enter something first');
				} else {
					$('#post_form').slideUp();
					$('#btn_post').show();
					$('#btn_close').hide();
					var title = $('#title').val();
					var description = $('#description').val();
					var url = $('#url').val();
					$.ajax({
						type: "POST",
						url: "add_post.php",
						data: {
							title: title,
							description: description,
							url: url,
							pam: 1
						},
						success: function(){
							$('#title').val('');
							displayResult();
						}
					});
				}	
			});
		/*****	*****/
		});
		
		function displayResult(){
			$.ajax({
				url: 'add_post.php',
				type: 'POST',
				async: false,
				data:{
					res: 1
				},
				success: function(response){
					$('#userData').html(response);
				}
			});
		}	
	</script>
	<script src = "js/btn-sterge.js"></script>
	<script src = "js/second-ajax.js"></script>
</html>