<?php

namespace MyProject\DataObject\Test;

class PostDO
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $deletedAt;

    /**
     * Getter for id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getter for user
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Getter for title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Getter for text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Getter for createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Getter for deletedAt
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Setter for id
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Setter for user
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Setter for title
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Setter for text
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Setter for createdAt
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Setter for deletedAt
     * @param string $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

}
