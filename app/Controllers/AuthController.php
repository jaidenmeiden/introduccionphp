<?php 

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as validar;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {

    public function getLoginAction($request) {   
        return $this->getRoute('Enter the information!');
    }

    public function postLoginAction($request) {   
        if($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody(); 
            $jobValidator = validar::key('username', validar::stringType()->notEmpty())
                    ->key('password', validar::stringType()->notEmpty());

            try {
                $jobValidator->assert($postData);
                $user  = User::where('username', '=', $postData['username'])->first();

                if($user) {
                    if(\password_verify($postData['password'], $user->password)){
                        return new RedirectResponse('/admin');
                    } else {
                        return $this->getRoute('Bad credencials!');
                    } 
                } else {
                    return $this->getRoute('Bad credencials!');
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