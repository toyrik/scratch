<?php
ini_set('error_reporting', E_ALL);
$post = $_POST;
$res = json_encode(file_get_contents('php://input'));

echo json_encode($post);
echo $res;
