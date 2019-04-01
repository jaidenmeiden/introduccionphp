<?php

use App\Models\{Job, Project, Printable};//Agrupación de 'use'

$jobs = Job::all();

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
?>