<?php
session_start();
session_destroy();
$response = new stdClass;
$response->mensaje = "ok";
echo json_encode($response);
?>