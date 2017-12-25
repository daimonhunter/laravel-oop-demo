<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 20:53
 */

namespace Wealthbetter\Repositories;

use Wealthbetter\Models\ProductModel;
use Wealthbetter\Models\ProductAttrModel;

class ProductRepository {

    /**
     * @var ProductModel
     */
    private $productModel;

    public function __construct(ProductModel $productModel,ProductAttrModel $productAttrModel)
    {
        $this->productModel = $productModel;
        $this->productAttrModel = $productAttrModel;
    }

    /**
     * @param int $productId
     * @return mixed
     */
    public function getProduct($productId)
    {
        $productAttr = $this->productAttrModel->where('product_id',$productId)->get()->toArray();
        foreach($productAttr as $k => $attr){
            $productAttrs[$attr['attribute']] = $attr['value'];
        }
        return array_merge($this->productModel->where('id',$productId)->get()->toArray(),
            $productAttrs);
    }
}