<?php

namespace App\src\model;

class Package
{
    private $id;
    private $name;
    private $content;
    private $illustration;
    private $price;
    private $other;
    private $tags;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getIllustration()
    {
        return $this->illustration;
    }

    /**
     * @param string illustration
     */
    public function setIllustration($illustration)
    {
        $this->illustration = $illustration;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param string other
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}
