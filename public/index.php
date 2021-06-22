<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new core\Application(dirname(__DIR__));
$app->router->get('/', 'homepage');
$app->router->get('/homepage', 'homepage');
$app->router->get('/about-us', 'about_us');
$app->router->get('/EmailConfirmation', 'EmailConfirmation');
$app->router->get('/statistics', 'statistics');
$app->router->get('/news', 'News');
$app->router->get('/workout', 'WorkoutPage');
$app->router->get('/loader', 'loader');
$app->router->get('/achievements', 'Achievements');

$app->router->get('/logout', [controllers\AuthController::class,'logout']);
$app->router->get('/available-workouts', [controllers\AuthController::class,'workouts']);


$app->router->get('/login', [controllers\AuthController::class,'login']);
$app->router->post('/login', [controllers\AuthController::class,'login']);
$app->router->get('/register', [controllers\AuthController::class,'register']);
$app->router->post('/register', [controllers\AuthController::class,'register']);
$app->router->get('/profile', [controllers\AuthController::class,'profile']);
$app->router->get('/workout-generator', [controllers\SiteController::class,'generateWorkout']);
$app->router->post('/workout-generator', [controllers\SiteController::class,'generateWorkout']);

$app->run();