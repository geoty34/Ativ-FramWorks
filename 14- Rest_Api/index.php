<?php

require 'vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\App;


require 'vendor/autoload.php';


$app = new App(['settings' => ['displayErrorDetails' => true]]);

$app->get('/', function (Request $request, Response $response, array $args) {
   
    $response->getBody()->write("API");

    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {

    if(isset($args['name'])){
        $name = $args['name'];

    } else{
        $name = "visitante";
    }
    // $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response->withStatus(404);
});

$app->get('/estudantes', function(Request $req, Response $resp,  $params ){
    $estudantes = [
        [
            'nome' => 'Abdul',
            'nascimento' => '13-05-2006',
            'e-mail' => 'abdul@gmail.com'
        ],
        [
            'nome' => 'Fernanda',
            'nascimento' => '03-02-2006',
            'e-mail' => 'fefi@gmail.com'
        ],
        [
            'nome' => 'Luiz',
            'nascimento' => '02-11-2002',
            'e-mail' => 'luiz@gmail.com'
        ]
    ];

    return $resp->withJson($estudantes);

});

$app->post('/estudantes', function(Request $req, Response $resp,  $params ){

   $estudantes = $req->getParsedBody();
    
   //inserir no banco de dados

   $estudantes['id'] = rand(1, 1000);

  

   return $resp->withJson($estudantes)->withStatus(201);

});

$app->put('/estudantes/{id}', function(Request $req, Response $resp,  $params ){

    
    //atualizar os dados no banco de dados

    try{
        $estudantes = $req->getParsedBody();

        $estudantes['id'] = $params['id'];

        if($estudantes['id'] == '99'){
            throw new Exception("Usuario não encontrado");
        }
 
        return $resp->withJson($estudantes)->withStatus(200);
   
 
    } catch(Exception $e){
        $erro = [
            'erro' => $e->getMessage(),
            'outras_infos' => "???"
        ];
        
        return $resp->withJson($erro)->withStatus(418);
        
    }
        
});

// deletar do abnco de dados

$app->delete('/estudantes/{id}', function(Request $req, Response $resp,  $params ){

    
    //atualizar os dados no banco de dados

    try{
        $estudantes = $req->getParsedBody();

        $estudantes['id'] = $params['id'];

        if($estudantes['id'] == '99'){
            throw new Exception("Usuario não encontrado");
        }
 
        return $resp->withStatus(204);
   
 
 
    } catch(Exception $e){
        $erro = [
            'erro' => $e->getMessage(),
            'outras_infos' => "???"
        ];
        
        return $resp->withJson($erro)->withStatus(418);
        
        
    }
        
});
 
    

$app->run();



