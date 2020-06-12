<?php

namespace App\src\model;

class Product
{
    private $id;
    private $productType;
    private $goodiesType;
    private $name;
    private $volume;
    private $date;
    private $price;
    private $licence;
    private $dimension;
    private $fabric;
    private $accessory;
    private $other;
    private $tag;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }
    
    /**
     * @return string
     */
    public function getGoodiesType()
    {
        return $this->goodiesType;
    }

    /**
     * @param string
     */
    public function setGoodiesType($goodiesType)
    {
        $this->goodiesType = $goodiesType;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setname($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param string
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * @param string
     */
    public function setLicence($licence)
    {
        $this->licence = $licence;
    }

    /**
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @param string
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
    }

    /**
     * @return string
     */
    public function getFabric()
    {
        return $this->fabric;
    }

    /**
     * @param string
     */
    public function setFabric($fabric)
    {
        $this->fabric = $fabric;
    }

    /**
     * @return string
     */
    public function getAccessory()
    {
        return $this->accessory;
    }

    /**
     * @param string
     */
    public function setAccessory($accessory)
    {
        $this->accessory = $accessory;
    }

    /**
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param string
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
}