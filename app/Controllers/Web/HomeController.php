<?php

namespace StudioAtual\Controllers\Web;

use StudioAtual\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        //return $this->withJson(['result' => 'ok']);
        return $this->view->render($this->response, 'index.html', []);
    }
}
