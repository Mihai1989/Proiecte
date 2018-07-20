<?php
/*ini_set('display_errors', 1);*/
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
include 'dbcon.php';
print_r($_POST);
if(ISSET($_POST['pam'])){
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$url = mysqli_real_escape_string($con, $_POST['url']);
	$res = mysqli_query($con, "INSERT INTO date_gogle (title, description, url)
				VALUES ('".$title."', '".$description."', '".$url."')");
	
}

if(ISSET($_POST['res'])){
	$query = "SELECT * FROM date_gogle";
    $result = mysqli_query($con, $query);
	while ($row = mysqli_fetch_array($result)) {
		/*print_r($result);*/
		$status = ($row['title'] == 1);
		print_r($row['title']);
		echo $html = "<tr id='new_row'>
		                  <td> ".$row['title']."</td>
						  <td>".$row['description']."</td>
						  <td><a href='#'>".$row['url']."</a></td>
						  <td><button class='delete btn btn-danger' id='".$row['id']."'>Sterge</button></td>
					</tr>";
    }
}
?>

<?php 

if (isset($_POST['actiune']) && $_POST['actiune'] == 'sterge') {
	$sterge_id = 'DELETE FROM date_gogle WHERE id='.$_POST['stergeId'];
	$del=mysqli_query($con, $sterge_id);
	echo "1";
}

?>
