<?php 

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as validar;

class AuthController extends BaseController {

    public function getLoginAction($request) {   
        return $this->getRoute('Enter the information!');
    }

    public function postLoginAction($request) {   
        $reponseMessage = '';

        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody(); 
            $jobValidator = validar::key('username', validar::stringType()->notEmpty())
                    ->key('password', validar::stringType()->notEmpty());

            try {
                $jobValidator->assert($postData);
                $user  = User::where('username', '=', $postData['username'])->first();

                if($user) {
                    if(\password_verify($postData['password'], $user->password)){
                
                    } else {
                        return $this->getRoute('Incorrect password!');
                    } 
                } else {
                    return $this->getRoute('Incorrect User!');
                }             
            } catch(\Exception $e) {
                return $this->getRoute($e->getMessage());
            }
        }        
    }

    public function getRoute($reponseMessage) {
        return $this->renderHTML('login.twig', [
            'reponseMessage' => $reponseMessage
        ]);
    }
}