<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../../config/Database.php';
include_once '../../models/BalanceModel.php';

$database = new Database();
$db = $database->connect();

$balance = new Balance();

$balance->id = isset($_GET['id']) ? $_GET['id'] : die();
$balance->read_single($db);
$balance_arr = array(
    'id' => $balance->id,
    'type' => $balance->type,
    'amount' => $balance->amount,
    'description' => $balance->description
);
print_r(json_encode($balance_arr));
?>