<?php
declare(strict_types=1);

namespace App\Domain\Book;

use App\Domain\Book\Book;
use App\Domain\User\User;

class BookRepository
{
    /**
     * @var Book[]
     */
    private $books;


    /**
     * BookRepository constructor.
     *
     * @param array|null $books
     */
    public function __construct(array $books = null)
    {
        $this->books = $books;
    }     
    
    /**
     * @return Book[]
     */
    public function findAll(): array 
    {
        return [];
    }

    /**
     * @param  int $id
     * @return Book
     * @throws BookNotFoundException
     */
    public function findBookOfId(int $id): Book
    {
        return new Book($id, "Response stub");
    }

    /**
     * @param  int $id
     * @return Book
     * @throws BookNotFoundException
     */
    public function deleteBookOfId(int $id): Book
    {
        return new Book($id, "Response stub");
    }

    /**
     * @param  int $id
     * @param  User $user
     * @return Book
     * @throws BookNotFoundException
     */
    public function checkOutBookOfId(int $id, User $user): Book
    {
        return new Book($id, "Response stub");
    }
}
