<?php

/**
 * Class User
 * Author: Isabel Pitcher
 * Version: 1.0
 * Purpose: for User
 */

class User
{
    public $id; //public friend private protect for a variable
    private $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }
    //they are my methods
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username; //this means get their username
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}