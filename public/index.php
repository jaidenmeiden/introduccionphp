<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('index', '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);
$map->get('addJobs', '/jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddjobAction'
]);
$map->get('addProject', '/project/add', [
    'controller' => 'App\Controllers\ProjectsController',
    'action' => 'getAddProjectAction'
]);

function printJobs($job) {
    //if(!$job->visible) {
    //  return;
    //}
  
    echo '<li class="work-position">
              <h5>' . $job->title . '</h5>
              <p>' . $job->description . '</p>
              <p>' . $job->getDurationString() . '</p>
              <strong>Achievements:</strong>
              <ul>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              </ul>
            </li>'; 
}

function printProjects($project) {

    echo '<div class="project">
            <h5>' . $project->title . '</h5>
            <div class="row">
            <div class="col-3">
                <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
            </div>
            <div class="col">
                <p>' . $project->description . '</p>
                <strong>Technologies used:</strong>
                <span class="badge badge-secondary">PHP</span>
                <span class="badge badge-secondary">HTML</span>
                <span class="badge badge-secondary">CSS</span>
            </div>
            </div>
        </div>';
}

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if(!$route){
    echo 'No Route';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $controller->$actionName();
}

?>