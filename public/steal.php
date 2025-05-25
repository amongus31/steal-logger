<?php
$data = $_SERVER['REQUEST_URI'];
file_put_contents("log.txt", date("Y-m-d H:i:s") . " - " . $data . "\n", FILE_APPEND);
header("Content-Type: image/png");
readfile("pixel.png");
?>
