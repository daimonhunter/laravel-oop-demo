<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/5
 * Time: 18:08
 */

namespace Wealthbetter\Business;

/**
 * Class ProductTrait
 * @package Wealthbetter
 */
trait ProductTrait
{

    /**
     * @param int $productId
     */
    public function getProduct($productId)
    {
        echo 'ProductTrait getProduct' . '<br>';
        \Log::info('ProductTrait getProduct');
        \Log::info(var_export($this->productRepository, true));
        $product = $this->productRepository->getProduct($productId);
        foreach ($product as $k => $attr) {
            var_dump($attr);
//            echo $k . ' => '.$attr .'<br>';
        }
    }
}