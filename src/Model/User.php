<?php declare(strict_types=1);

namespace App\Model;

/**
 *
 */
class User {

    /**
     * The user id
     */
    public $id;

    /**
     * the user firstname
     */
    private $firstname;

    /**
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    /**
     *
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }
}