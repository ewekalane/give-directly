<?php
declare(strict_types=1);

namespace App\Application\Actions\Book;

use Psr\Http\Message\ResponseInterface as Response;

class CheckOutBookAction extends BookAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {

        $userId = (int) $this->resolveArg('id');
        $bookId = (int) $this->resolveArg('id');
        $bookId = $this->bookRepository->deleteBookOfId($bookId);

        $this->logger->info("Book of id `${bookId}` was checked out.");

        return $this->respondWithData($bookId);
    }
}