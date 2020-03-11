<?php
/**
 * Created by PhpStorm.
 * User: hibatallah.aouadni
 * Date: 11/03/2020
 * Time: 16:28
 */

namespace App\Entity;


class BlogPost
{
    private $number;
    private $title;
    private $post;

    /**
     * BlogPost constructor.
     * @param $number
     * @param $title
     * @param $post
     */
    public function __construct($number, $title, $post)
    {
        $this->number = $number;
        $this->title = $title;
        $this->post = $post;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param string $post
     */
    public function setPost($post): void
    {
        $this->post = $post;
    }

}