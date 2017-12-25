<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 13:28
 */
namespace App\Http\Controllers\V2;

use Illuminate\Http\Request;
use Wealthbetter\Services\OrderService;
use Wealthbetter\Services\ProductService;
use Wealthbetter\Validators\OrderValidator\OrderUserValidator;
use Wealthbetter\Validators\ProductValidator;

/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * @var OrderService
     */
    private $orderService;
    /**
     * @var ProductService
     */
    private $productService;

    /**
     * @param OrderService $orderService
     * @param ProductService $productService
     */
    public function __construct(OrderService $orderService, ProductService $productService)
    {
        $this->orderService = $orderService;
        $this->productService = $productService;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Wealthbetter\Services\Exception
     */
    public function anyCreateOrder(Request $request)
    {
        $productId = $request->get('productId', 0);
        echo $productId;

    }


}