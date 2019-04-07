<?php 

namespace App\Controllers;

use App\Models\Job;

class JobsController extends BaseController {

    public function getAddjobAction($request) {
        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();

            $job = new Job();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->save();
        }
        //var_dump($request->getMethod());
        //var_dump((string)$request->getBody());
        //var_dump($request->getParsedBody());

        echo $this->renderHTML('addJob.twig');
    }
}