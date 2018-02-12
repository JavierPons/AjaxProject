<?php 
// other way to set default array
$arr= array();
$con = new mysqli("localhost","root","","ajaxtest");
// para seleccionar de base de datos
 $sql="SELECT * FROM names"; 
if($result = $con->query($sql)){
while($row = $result->fetch_assoc()){
    $arr[]=$row;
}
echo json_encode($arr);
}

 //Primero hay que asegurarse de que recibes la informacion antes de hacer llamadas Ajax

?>