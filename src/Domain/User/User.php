<?php
declare(strict_types=1);

namespace App\Domain\User;
use Illuminate\Database\Eloquent\Model as Model;

class User implements Model
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @param int|null  $id
     * @param string    $email
     * @param string    $firstName
     * @param string    $lastName
     */
    public function __construct(?int $id, string $email, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->email = strtolower($email);
        $this->firstName = ucfirst($firstName);
        $this->lastName = ucfirst($lastName);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        ];
    }
}
