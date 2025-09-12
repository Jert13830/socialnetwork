<?php
 class User extends UserRepository{
    private ?int $id = null;  // "?" means it can be null OR int
    private string $surname;
    private string $forename;
    private DateTime $DOB;
    private string $email;
    private string $username;
    private string $password;

     public function __construct(string $_surname, string $_forename,DateTime $_DOB,string $_email,string $_username,string $_password ,?int $_id = null) {
        $this->id = $_id;
        $this->surname = $_surname;
        $this->forename = $_forename;
        $this->DOB = $_DOB;
        $this->email = $_email;
        $this->username = $_username;
        $this->password = $_password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

     public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getForename()
    {
        return $this->forename;
    }

    public function setForename($forename)
    {
        $this->forename = $forename;

        return $this;
    }
     public function getDOB()
    {
        return $this->DOB;
    }

    public function setDOB($DOB)
    {
        $this->DOB= $DOB;

        return $this;
    }

     public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

     public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

     public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
 }

?>