<?php

namespace StudioAtual\Controllers\Web;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use StudioAtual\Controllers\Controller;

class MailTestController extends Controller
{
    public function send(Request $request, Response $response)
    {
        $this->mailer->send('emails/test.html', [], function ($message) {
            $message->subject('Mail Test Subject');
            $message->from(['test@test.com' => 'Test Name']);
            $message->to(['admin@test.com' => 'Admin Name']);
        });
        $response->getBody()->write('ok');
        return $response;
    }
}
