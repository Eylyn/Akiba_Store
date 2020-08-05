<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Package;

class PackageDAO extends DAO 
{
    private function buildObject($row)
    {
        $package = new Package();
        $package->setId($row['id']);
        $package->setName($row['name']);
        $package->setContent($row['content']);
        $package->setIllustration($row['illustration']);
        $package->setPrice($row['price']);
        $package->setOther($row['other']);
        $package->setTags($row['tags']);

        return $package;
    }

    public function getPackages()
    {
        $sql = 'SELECT id, name, content, illustration, price, other, tags FROM package ORDER BY id';
        $result = $this->createQuery($sql);
        $packages = [];
        foreach ($result as $row) {
            $packageId = $row['id'];
            $packages[$packageId] = $this->buildObject($row);
        }
        $result->closeCursor();

        return $packages;
    }

    public function getPackage($packageId)
    {
        $sql = 'SELECT id, name, content, illustration, price, other, tags FROM package WHERE id = ?';
        $result = $this->createQuery($sql, [$packageId]);
        $package = $result->fetch();
        $result->closeCursor();
        
        return $this->buildObject($package);
    }
}