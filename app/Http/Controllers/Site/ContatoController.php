<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\EnviarContatoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Mailjet\Resources;


class ContatoController extends Controller
{
    private $mj;

    public function __construct()
    {
        $this->mj = new \Mailjet\Client(
            getenv('MJ_APIKEY_PUBLIC'),
            getenv('MJ_APIKEY_PRIVATE'),
            true,['version' => 'v3.1']);
    }

    public function index()
    {
        return view('site.contato');
    }

    public function enviar(EnviarContatoRequest $request)
    {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => 'contato@alencar.in',
                        'Name' => 'Site Alencar.in'
                    ],
                    'To' => [
                        [
                            'Email' => "oscar.alencar@gmail.com",
                            'Name' => "Oscar"
                        ]
                    ],
                    'Subject' => "Contato do site alencar.in",
                    'HTMLPart' => "<h3>".$request->get('nome')."</h3>"."<p>".$request->get('email')."</p>"."<p>".$request->get('assunto')."</p>"
                ]
            ]
        ];
        $response = $this->mj->post(Resources::$Email, ['body' => $body]);
        if ( $response->success() ) {
            return redirect(route('site.contato'))->with('email-sucesso', 'Email enviado com sucesso');
        }
        return redirect(route('site.contato'))->with('email-falha', 'Houve um erro no envio pelo formulário. Tente enviar novamente');
    }
}
