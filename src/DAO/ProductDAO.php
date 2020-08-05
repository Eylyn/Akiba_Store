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
        $product->setProductType($row['type']);
        $product->setGoodiesType($row['goodiesType']);
        $product->setNameProduct($row['nameProduct']);
        $product->setProductDescription($row['productDescription']);
        $product->setPictureLink($row['pictureLink']);
        $product->setQuantity($row['quantity']);
        $product->setVolume($row['volume']);
        $product->setReleaseDate($row['releaseDate']);
        $product->setPrice($row['price']);
        $product->setLicence($row['licence']);
        $product->setBrand($row['brand']);
        $product->setDimension($row['dimension']);
        $product->setMaterial($row['material']);
        $product->setAccessory($row['accessory']);
        $product->setOther($row['other']);
        $product->setTags($row['tags']);

        return $product;
    }

    public function getProducts()
    {
        $sql = 'SELECT product.id, product_type.type, product.goodiesType, product.nameProduct, product.productDescription, product.pictureLink, product.quantity, product.volume, product.releaseDate, product.price, product.licence, product.brand, product.dimension, product.material, product.accessory, product.other, product.tags FROM product INNER JOIN product_type ON product_type.id = product.productType ORDER BY id DESC LIMIT 5';
        $result = $this->createQuery($sql);
        $products = [];
        foreach ($result as $row) {
            $productId = $row['id'];
            $products[$productId] = $this->buildObject($row);
        }
        $result->closeCursor();

        return $products;
    }

    public function getProduct($productId)
    {
        $sql = 'SELECT product.id, product.productType, product.goodiesType, product.nameProduct, product.productDescription, product.pictureLink, product.quantity, product.volume, product.releaseDate, product.price, product.licence, product.brand, product.dimension, product.material, product.accessory, product.other, product.tags FROM product WHERE id = ?';
        $result = $this->createQuery($sql, [$productId]);
        $product = $result->fetch();
        $result->closeCursor();

        return $this->buildObject($product);
    }

    public function getProductType($productType)
    {
        $sql = 'SELECT product.id, product_type.type, product.goodiesType, product.nameProduct, product.productDescription, product.pictureLink, product.quantity, product.volume, product.releaseDate, product.price, product.licence, product.brand, product.dimension, product.material, product.accessory, product.other, product.tags FROM product INNER JOIN product_type ON product_type.id = product.productType WHERE product_type.type = ? ORDER BY id DESC';
        $result = $this->createQuery($sql, [$productType]);
        $products = [];
        foreach ($result as $row) {
            $productId = $row['id'];
            $products[$productId] = $this->buildObject($row);
        }
        $result->closeCursor();
        
        return $products;
    }
}