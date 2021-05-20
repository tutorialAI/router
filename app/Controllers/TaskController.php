<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\Response;

class TaskController
{
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('task controller');

        return $response;
    }

    public function show(ServerRequestInterface $request, array $args = []): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('task ID :' . $args['id']);

        return $response;
    }

    public function update(ServerRequestInterface $request, array $args = [])
    {
        $response = new Response();

        return $response;
    }
}