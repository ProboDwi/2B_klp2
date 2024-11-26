<?php
// routes.php

require_once 'app/controllers/PlantsController.php';
require_once 'app/controllers/UserController.php';

$plantscontroller = new PlantsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/plants/index' || $url == '/') {
    $plantscontroller->index();
} elseif ($url == '/plants/create' && $requestMethod == 'GET') {
    $plantscontroller->create();
} elseif ($url == '/plants/store' && $requestMethod == 'POST') {
    $plantscontroller->store();
} elseif (preg_match('/\/plants\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $plantscontroller->edit($userId);
} elseif (preg_match('/\/plants\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $plantscontroller->update($userId, $_POST);
} elseif (preg_match('/\/plants\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $plantscontroller->delete($userId);
} 


  elseif ($url == '/user/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $plantscontroller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}