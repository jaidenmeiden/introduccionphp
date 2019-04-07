<?php 

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController {

    public function indexAction() {
        $jobs = Job::all();
        $projects = Project::all();
        
        $name = "Jaiden Riaño";
        $limitMonths = 1000;

        return $this->renderHTML('index.twig', [
            'name' => $name,
            'limitMonths' => $limitMonths,
            'jobs' => $jobs,
            'projects' => $projects
        ]);
    }
}