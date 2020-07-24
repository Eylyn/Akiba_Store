<?php

namespace App\src\model;

class Product
{
    private $id;
    private $productType;
    private $goodiesType;
    private $nameProduct;
    private $productDescription;
    private $pictureLink;
    private $quantity;
    private $volume;
    private $releaseDate;
    private $price;
    private $licence;
    private $brand;
    private $dimension;
    private $material;
    private $accessory;
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
     * @param int
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param int
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
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * @param string
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }

       /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }

       /**
     * @return string
     */
    public function getPictureLink()
    {
        return $this->pictureLink;
    }

    /**
     * @param string
     */
    public function setPictureLink($pictureLink)
    {
        $this->pictureLink = $pictureLink;
    }

       /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

       /**
     * @return \Date
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param \Date
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }
    
    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float
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
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
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
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param string
     */
    public function setMaterial($material)
    {
        $this->material = $material;
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
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}