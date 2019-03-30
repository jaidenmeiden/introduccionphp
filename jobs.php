<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

require 'lib1/Project.php';

use App\Models\Job;
use App\Models\{Project, Printable};//Agrupación de 'use'

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev', 'This is an awesome job!!!');
$job2->months = 14;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 24;

$job4 = new Job('NodeJS Dev', 'This is an awesome job!!!');
$job4->months = 22;

$job5 = new Job('Frontend Dev', 'This is an awesome job!!!');
$job5->setVisible(false);
$job5->months = 3;

$job6 = new Job('', 'This is an awesome job!!!');
$job6->months = 3;

$project1 = new Project('Project 1', 'Descripción 1');

$projectLib = new Lib1\Project();

$jobs = [
    $job1,    
    $job2,  
    $job3,  
    $job4,  
    $job5,  
    $job6
  ];

  $projects = [
    $project1
  ];  
  
  function printElement(Printable $job) {
    if(!$job->visible) {
      return;
    }
  
    echo '<li class="work-position">
              <h5>' . $job->getTitle() . '</h5>
              <p>' . $job->getDescription() . '</p>
              <p>' . $job->getDurationString() . '</p>
              <strong>Achievements:</strong>
              <ul>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              </ul>
            </li>'; 
  }
?>