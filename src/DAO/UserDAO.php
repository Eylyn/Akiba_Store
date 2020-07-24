<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\User;

class UserDAO extends DAO
{
    private function buildObject($row)
    {
        $user = new User();
        $user->setId($row['id']);
        $user->setName($row['name']);
        $user->setFirstName($row['firstName']);
        $user->setPseudo($row['pseudo']);
        $user->setEmail($row['email']);
        $user->setPassword($row['password']);
        $user->setPhotoLink($row['photoLink']);
        $user->setAddress1($row['address1']);
        $user->setAddress2($row['address2']);
        $user->setPostcode($row['postcode']);
        $user->setCity($row['city']);
        $user->setPhone($row['phone']);
        $user->setRole($row['roleName']);
        $user->setRegisterDate($row['registerDate']);
        $user->setConnectionDate($row['connectionDate']);
        $user->setPackage($row['name']);

        return $user;
    }

    public function getUsers()
    {
        $sql = 'SELECT user.id, user.pseudo, user.email, user_role.roleName, DATE_FORMAT(registerDate, \'%d/%m/%Y à %Hh%imin\') as registerDate FROM user INNER JOIN user_role ON role.id = user.role ORDER BY user.id';
        $result = $this->createQuery($sql);
        $users = [];
        foreach ($result as $row) {
            $userID = $row['id'];
            $users[$userID] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $users;
    }

}