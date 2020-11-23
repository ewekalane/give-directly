<?php
declare(strict_types=1);

namespace App\Application\Actions\Book;

use Psr\Http\Message\ResponseInterface as Response;

class DeleteBookAction extends BookAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $bookId = (int) $this->resolveArg('id');
        $bookId = $this->bookRepository->deleteBookOfId($bookId);

        $this->logger->info("Book of id `${bookId}` was viewed.");

        return $this->respondWithData($bookId);
    }
}