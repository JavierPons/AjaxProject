<?php 
// other way to set default array
 
$uid = $_POST['uid'];
$c = $_POST['c'];

$con = new mysqli("localhost","root","","ajaxtest");
$sql = "UPDATE names SET checked = '".$c."' WHERE id = '".$uid ."'";

if($con->query($sql)===TRUE){
    echo 'UPDATED';
}else {
    echo 'FAILED';
}

?>