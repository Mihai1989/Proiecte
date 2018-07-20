<?php
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
include('dbcon.php');
$filter_input = $_POST['filter_input'];
$where = "where title like '%".$filter_input."%' or description like '%".$filter_input."%' or url like '%".$filter_input."%'";
$sql = "select * from date_gogle $where";
$res = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($res);

if ($num_rows > 0) {
    // output data of each row
    while($result = mysqli_fetch_array($res)) {
    	print_r($result);
		$status = ($result['title'] == 1);
		echo $status;
        echo $html = "<tr id='new_row'>
		                  <td> ".$result['title']."</td>
						  <td>".$result['description']."</td>
						  <td><a href='#'>".$result['url']."</a></td>
						  <td><button class='delete btn btn-danger' id='".$result['id']."'>Sterge</button></td>
					</tr>";
    }
}

?>

<?php 
include('dbcon.php');
if (isset($_POST['actiune']) && $_POST['actiune'] == 'sterge') {
		$sterge_id = 'DELETE FROM date_gogle WHERE id='.$_POST['stergeId'];
		$del=mysqli_query($con, $sterge_id);
		echo "1";
	}
?>