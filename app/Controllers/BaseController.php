<?php

namespace App\Controllers;

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
        return $this->templateEmgine->render($fileName, $data);
    }
}