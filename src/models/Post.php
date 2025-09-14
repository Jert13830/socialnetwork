<?php
 class Post extends PostRepository{
    private ?int $id = null;  // "?" means it can be null OR int
    private string $title;
    private string $content;
    private DateTime $date;
    private int $userId;

     public function __construct(string $_title, string $_content,DateTime $_date,string $_email,int $_userId,?int $_id = null) {
        $this->id = $_id;
        $this->title = $_title;
        $this->content = $_content;
        $this->date = $_date;
        $this->userId = $_userId;
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

     public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
     
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date= $date;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
 }

?>