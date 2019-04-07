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
    $this->templateEmgine->addFunction(new \Twig\TwigFunction('asset', function ($asset) {
        // implement whatever logic you need to determine the asset path
        return sprintf('%s', ltrim($asset, '/'));
    }));
}

    public function renderHTML($fileName, $data = []) {
        return new HtmlResponse($this->templateEmgine->render($fileName, $data));
    }
}