<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 20:48
 */

namespace Wealthbetter\Contracts;

interface ProductInterface {
    public function getProduct($productId);
}