<?php

use App\Models\{Job, Project, Printable};//Agrupación de 'use'

$projects = Project::all();

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
?>