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

    public function register(Parameter $post)
    {
        $sql = 'INSERT INTO user (name, firsName, pseudo, email, password, photoLink, address1, address2, postcode, city, phone, role, registerDate) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())';
        $this->createQuery($sql, [$post->get('name'), $post->get('firstName'), $post->get('pseudo'), $post->get('email'), password_hash($post->get('password'), PASSWORD_BCRYPT), $post->get('photoLink'), $post->get('address1'), $post->get('address2'), $post->get('postcode'), $post->get('city'), $post->get('phone'), 2]);
    }

}