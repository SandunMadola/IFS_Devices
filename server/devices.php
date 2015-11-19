<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "root", "ifs_devices");

$result = $conn->query("SELECT * FROM device_model");

$devicearray = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    $devicearray[]=$rs;
}
echo json_encode($devicearray);
$conn->close();

?>

