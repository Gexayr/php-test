<?php


ini_set("display_errors",1);
error_reporting(E_ALL);

include_once('config.php');
include_once('viewController.php');
include_once('emailSender.php');
include_once('smsSender.php');

$viewController = new ViewController();
$emailSender = new EmailSender();
$smsSender = new SmsSender();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitization against XSS
    $data = htmlspecialchars($_POST['user_data']);
    $received_data = $viewController->submitForm($data);
    echo $received_data;
    $emailSender->send($received_data);
    $smsSender->send($received_data);
}else {
    echo $viewController->renderForm();
}