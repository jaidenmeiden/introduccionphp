<?php 

namespace App\Controllers;

use App\Models\Job;
use Respect\Validation\Validator as validar;

class JobsController extends BaseController {

    public function getAddjobAction($request) {
        $reponseMessage = '';

        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = validar::key('title', validar::stringType()->notEmpty())
                    ->key('description', validar::stringType()->notEmpty());

            try {
                //$jobValidator->validate($postData);// Es true o false
                $jobValidator->assert($postData);

                $job = new Job();
                $job->title = $postData['title'];
                $job->description = $postData['description'];
                $job->save();

                $reponseMessage = 'Saved';
            } catch(\Exception $e) {
                $reponseMessage = $e->getMessage();
            }
        }
        //var_dump($request->getMethod());
        //var_dump((string)$request->getBody());
        //var_dump($request->getParsedBody());

        return $this->renderHTML('addJob.twig', [
            'reponseMessage' => $reponseMessage
        ]);
    }
}