<?php

require __DIR__ .'/vendor/autoload.php';


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Model\Dados;


$app = AppFactory::create();
$app->setBasePath('/api-frases-rick-morty');

$app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response, $args) {
    $resultado = array(
        "status" => STATUS_ATENCAO,
        "metodo" => $_SERVER['REQUEST_METHOD'],
        "result" =>array(
            "Frases" => BASE_URL . "frases",
            "FrasesId" => BASE_URL . "frases/[id]"
        )
    );
    $response->getBody()->write(json_encode($resultado));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
});

$app->get('/frases', function (Request $request, Response $response, $args) 
{
    $dados = new Dados();
    $resultado = array(
        "status" => STATUS_SUCESSO,
        "metodo" => $_SERVER['REQUEST_METHOD'],
        "result" => $dados->frasesListadas()
    );

    $response->getBody()->write(json_encode($resultado));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/frases/{id}', function (Request $request, Response $response, $args) {
    $id = filter_var($args['id'], FILTER_SANITIZE_NUMBER_INT) ;

    $dados = new Dados();
    $array_frases = $dados->frasesListadas();

    $contidade = count($array_frases);

    for ($i = 0; $i < $contidade; $i++) 
    { 
        if($array_frases[$i]['id'] == $id)
        {
            $resposta = $array_frases[$i];
        }
    }

    if(empty($resposta))
    {
        $resultado = array(
            "status" => STATUS_ERROR,
            "metodo" => $_SERVER['REQUEST_METHOD'],
            "result" => "Indice não existe"
        );

        $status = 404;
    }
    else
    {
        $resultado = array(
            "status" => STATUS_SUCESSO,
            "metodo" => $_SERVER['REQUEST_METHOD'],
            "result" => $resposta
        );

        $status = 200;
    }

    $response->getBody()->write(json_encode($resultado));
    return $response->withHeader('Content-Type', 'application/json')->withStatus($status);
});


$app->run();