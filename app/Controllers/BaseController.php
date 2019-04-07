<?php

namespace App\Controllers;

use Zend\Diactoros\Response\HtmlResponse;

class BaseController {
    protected $templateEmgine;

    public function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        $this->templateEmgine = new \Twig\Environment($loader, [
            'debug' => true,
            'cache' => false,
        ]);
    }

    public function renderHTML($fileName, $data = []) {
        return new HtmlResponse($this->templateEmgine->render($fileName, $data));
    }
}