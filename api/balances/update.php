<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once '../../config/Database.php';
include_once '../../models/BalanceModel.php';

$database = new Database();
$db = $database->connect();

$balances = new Balance();
$data = json_decode(file_get_contents('php://input'));

$balances->id = $data->id;

$balances->type = $data->type;
$balances->amount = $data->amount;
$balances->description = $data->description;

if($balances->update($db)){
    echo json_encode(
        array('message' => 'Updated data successfully!')
    );
} else{
    echo json_encode(
        array('message' => 'Failed update data!')
    );
}
?>