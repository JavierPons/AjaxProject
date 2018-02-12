<?php 
// other way to set default array
 
$uid = $_POST['uid'];
 // $c = $_POST['c'];

$con = new mysqli("localhost","root","","ajaxtest");
$sql = "DELETE FROM names  WHERE id = '".$uid ."'";

if($con->query($sql)===TRUE){
    echo 'DELETE';
}else {
    echo 'FAILED';
}

?>