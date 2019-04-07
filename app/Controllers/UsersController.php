<?php 

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as validar;

class UsersController extends BaseController {

    public function getAddUserAction($request) {    
        $reponseMessage = '';

        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = validar::key('username', validar::stringType()->notEmpty())
                    ->key('password', validar::stringType()->notEmpty());

            try {
                //$jobValidator->validate($postData);// Es true o false
                $jobValidator->assert($postData);

                $user = new User();
                $user->username = $postData['username'];
                $user->password = \password_hash($postData['password'], PASSWORD_DEFAULT);
                $user->save();

                $reponseMessage = 'Saved';
            } catch(\Exception $e) {
                $reponseMessage = $e->getMessage();
            }
        }

        return $this->renderHTML('addUser.twig', [
            'reponseMessage' => $reponseMessage
        ]);
    }
}