<?php

namespace App\src\model;

class User
{
    private $id;
    private $name;
    private $firstname;
    private $address;
    private $postcode;
    private $city;
    private $phone;
    private $pseudo;
    private $password;
    private $email;
    private $role;
    private $registerDate;
    private $connectionDate;
    private $package;

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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getregisterDate()
    {
        return $this->registerDate;
    }

    /**
     * @param \DateTime $registerDate
     */
    public function setregisterDate($registerDate)
    {
        $this->registerDate = $registerDate;
    }

    /**
     * @return \DateTime
     */
    public function getconnectionDate()
    {
        return $this->connectionDate;
    }

    /**
     * @param \DateTime $connectionDate
     */
    public function setconnectionDate($connectionDate)
    {
        $this->connectionDate = $connectionDate;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param int $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

}
