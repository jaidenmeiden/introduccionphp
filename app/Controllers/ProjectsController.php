<?php 

namespace App\Controllers;

use App\Models\Project;
use Respect\Validation\Validator as validar;

class ProjectsController extends BaseController {

    public function getAddProjectAction($request) {    
        $reponseMessage = '';

        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = validar::key('title', validar::stringType()->notEmpty())
                    ->key('description', validar::stringType()->notEmpty());

            try {
                //$jobValidator->validate($postData);// Es true o false
                $jobValidator->assert($postData);

                $project = new Project();
                $project->title = $postData['title'];
                $project->description = $postData['description'];
                $project->save();

                $reponseMessage = 'Saved';
            } catch(\Exception $e) {
                $reponseMessage = $e->getMessage();
            }
        }

        return $this->renderHTML('addProject.twig', [
            'reponseMessage' => $reponseMessage
        ]);
    }
}