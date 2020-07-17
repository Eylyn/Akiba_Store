<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Product;

class ProductDAO extends DAO 
{
    private function buildObject($row)
    {
        $product = new Product();
        $product->setId($row['id']);
        $product->setProductType($row['productType']);
        $product->setGoodiesType($row['goodiesType']);
        $product->setNameProduct($row['nameProduct']);
        $product->setDescriptionProduct($row['descriptionProduct']);
        $product->setPictureLink($row['pictureLink']);
        $product->setQuantity($row['quantity']);
        $product->setVolume($row['volume']);
        $product->setReleaseDate($row['releaseDate']);
        $product->setPrice($row['price']);
        $product->setLicence($row['licence']);
        $product->setBrand($row['brand']);
        $product->setDimension($row['dimension']);
        $product->setFabric($row['fabric']);
        $product->setAccessory($row['accessory']);
        $product->setOther($row['other']);
        $product->setTags($row['tags']);

        return $product;
    }

    public function getProducts()
    {
        $sql = 'SELECT product.id, product.nameProduct, product_type.type FROM product INNER JOIN product_type ON product_type.id = product.productType ORDER BY product.id';
        $result = $this->createQuery($sql);
        $products = [];
        foreach ($result as $row) {
            $productId = $row['id'];
            $products[$productId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $products;
    }
}