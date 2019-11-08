<?php
session_start();
session_destroy();
$response[mensaje] = "ok";
echo json_encode($response);
?>