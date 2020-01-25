<?php

namespace StudioAtual\Controllers\Web;

use StudioAtual\Controllers\Controller;
use StudioAtual\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        //$users = User::all();
        //return $this->withJson($users);
        //return $this->withJson(['result' => 'ok']);
        $this->log('this is a test of log!');
        $this->log('test error', ['result' => 'error'], 'error');
        return $this->view->render($this->response, 'index.html', []);
    }
}
