<?php
    require_once('../class/Message.php');
    $dataMessages = json_encode(Message::readData());
    print_r($dataMessages);
?>