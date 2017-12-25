<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 17:26
 */

namespace Wealthbetter\Services;

use Wealthbetter\Business\FundManagerTrait;
use Wealthbetter\Business\ProductTrait;
use Wealthbetter\Repositories\FundManagerRepository;
use Wealthbetter\Repositories\ProductRepository;

/**
 * Class ProductService
 * @package Wealthbetter\Services
 */
class ProductService extends BaseService
{

    use FundManagerTrait;
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @param ProductRepository $productRepository
     * @param FundManagerRepository $fundManagerRepository
     */
    public function __construct(ProductRepository $productRepository, FundManagerRepository $fundManagerRepository)
    {
        $this->productRepository = $productRepository;
        $this->fundManagerRepository = $fundManagerRepository;
    }

    /**
     * @param $productId
     * @return mixed
     */
    public function showProductDetail($productId)
    {
        $product = $this->productRepository->getProduct($productId);
        $fundManager = $this->getFundManager($product['p_productMemberId']);
        return array_merge($product, $fundManager);
    }

}