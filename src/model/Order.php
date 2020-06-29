<?php

namespace App\src\model;

class Order
{
    private $id;
    private $idUser;
    private $product;
    private $orderDate;
    private $orderNumber;
    private $status;

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
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    
    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param \DateTime orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param int orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}