<?php
declare(strict_types=1);

use App\Application\Actions\Book\CheckOutBookAction;
use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\Book\ListBooksAction;
use App\Application\Actions\Book\ViewBookAction;
use App\Application\Actions\Book\DeleteBookAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->group('/books/request', function (Group $group) {
        $group->get('', ListBooksAction::class);
        $group->get('/{id}', ViewBookAction::class);
        $group->post('/', CheckOutBookAction::class);
        $group->delete('/{id}', DeleteBookAction::class);
    });
};
