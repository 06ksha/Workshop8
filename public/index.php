<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/db.php'; // This provides the $pdo variable
require __DIR__ . '/../app/models/Student.php';
require __DIR__ . '/../app/controllers/StudentController.php';

use Jenssegers\Blade\Blade;

$views = __DIR__ . '/../app/views';
$cache = __DIR__ . '/../cache/views';
$blade = new Blade($views, $cache);

// FIX IS HERE: Create the model first, then pass BOTH to the controller
$studentModel = new Student($pdo); 
$controller = new StudentController($studentModel, $blade); 

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create': $controller->create(); break;
    case 'store':  $controller->store(); break;
    case 'edit':   $controller->edit($id); break;
    case 'update': $controller->update($id); break;
    case 'delete': $controller->delete($id); break;
    default:       $controller->index(); break;
}