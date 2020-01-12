<?php
if(isset($_POST['show_time'])){
	$current_time = date('h:i:s a');
	echo'<strong>Php running time </strong><span style="color:orange;">'.$current_time.'</span>';
}
?>