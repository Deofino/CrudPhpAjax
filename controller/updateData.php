<?php
    require_once('../class/Message.php');
    $message = new Message;
    $data = json_decode(file_get_contents("php://input"));
    $message->setName($data->name);
    $message->setLastname($data->lastname);
    $message->setEmail($data->email);
    $message->setSubject($data->subject);
    $message->setMessage($data->message);

    echo Message::update($message,$data->id);
?>