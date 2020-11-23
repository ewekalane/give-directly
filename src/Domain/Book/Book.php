<?php
declare(strict_types=1);

namespace App\Domain\Book;

use JsonSerializable;
use App\Domain\User\User;
use Illuminate\Database\Eloquent\Model as Model;

class Book extends Model
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int|null
     */
    private $checkOutBy;

    /**
     * @var int|null
     */
    private $deletedBy;

    /**
     * @param int    $id
     * @param string $email
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCheckOutBy(): ?int
    {
        return $this->checkOutBy;
    }

    /**
     * Set the value of checkOutBy
     *
     * @param  int|null  $checkOutBy
     *
     * @return  self
     */ 
    public function setCheckOutBy($checkOutBy)
    {
        $this->checkOutBy = $checkOutBy;

        return $this;
    }

    /**
     * Get the value of deletedBy
     *
     * @return  int|null
     */ 
    public function getDeletedBy(): ?int
    {
        return $this->deletedBy;
    }

    /**
     * Set the value of deletedBy
     *
     * @param  int|null  $deletedBy
     *
     * @return  self
     */ 
    public function setDeletedBy($deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'email' => $this->name,
            'checkOutBy' => $this->checkOutBy,
            'deleted' => $this->deleted,
            'deletedBy' => $this->deletedBy
        ];
    }
}