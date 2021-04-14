<?php
    require_once("../class/Message.php");
    $dataMessage = json_decode(file_get_contents("php://input"));
    $message = new Message;
    $message->setName($dataMessage->name);
    $message->setLastname($dataMessage->lastname);
    $message->setEmail($dataMessage->email);
    $message->setSubject($dataMessage->subject);
    $message->setMessage($dataMessage->message);

    echo Message::insertData($message);
    // echo 'error'
?>