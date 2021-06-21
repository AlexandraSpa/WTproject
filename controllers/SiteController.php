<?php


namespace controllers;

require_once __DIR__ . '/../core/Application.php';
use core\Controller;
use core\Middlewares\AuthMiddleware;
use core\Request;
use core\Response;
use models\WorkoutForm;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['generateWorkout']));

    }
    public function generateWorkout(Request $request,Response $response){
        $workoutForm=new WorkoutForm();
        if($request->isPost()){

            $workoutForm->loadData($request->getBody());
            if($workoutForm->validate()){
                $response->redirect('/available-workouts');
                return 'ok';
            }
        }
        $this->setLayout('header');
        return Controller::render('Workout-Generator',[
            'model'=> $workoutForm
        ]);
    }


}