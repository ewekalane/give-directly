<?php
declare(strict_types=1);

namespace App\Application\Actions\Book;

use Psr\Http\Message\ResponseInterface as Response;

class ListBooksAction extends BookAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $books = $this->bookRepository->findAll();

        $this->logger->info("Book list was viewed.");

        return $this->respondWithData($books);
    }
}
