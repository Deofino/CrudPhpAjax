<?php
    require_once('../class/Message.php');
    $data = json_decode(file_get_contents("php://input"));
    echo json_encode(Message::read($data->id));

?>