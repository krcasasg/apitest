<?php
/**
 * Created by PhpStorm.
 * User: maciejklowan
 * Date: 02/01/2018
 * Time: 16:50
 */

namespace CodesWholesale\Resource;


class ProductNotification extends Resource
{
    const PRODUCT_ID = "productId";
    const PRODUCT_HREF = "productHref";

    public function getProductId()
    {
        return $this->getProperty(self::PRODUCT_ID);
    }

    public function getProductHref()
    {
        return $this->getProperty(self::PRODUCT_HREF);
    }
}