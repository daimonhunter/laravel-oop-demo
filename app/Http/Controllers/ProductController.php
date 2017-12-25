<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 13:28
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wealthbetter\Services\OrderService;
use Wealthbetter\Services\ProductService;
use Wealthbetter\Validators\ProductValidator;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
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
     * @api {post} /product/detail 请求产品详情
     * @apiName GetUser
     * @apiGroup Product
     *
     * @apiParam {Int} productId 唯一产品ID.
     *
     * @apiSuccess {String} p_Id 产品ID.
     * @apiSuccess {String} p_Name  产品名称.
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "p_Id": "1283",
     *       "p_Name": "铂诺睿进310期"
     *     }
     *
     * @apiError UserNotFound The id of the User was not found.
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "UserNotFound"
     *     }
     *
     * @param Request $request
     * @return mixed
     * @throws \Wealthbetter\Services\Exception
     */
    public function anyDetail(Request $request)
    {
        $productId = $request->get('productId', 0);
        try {
            $productDetail = $this->productService->showProductDetail($productId);
            return json_encode($productDetail);
        } catch (\Exception $e) {
            return jsonResult(false, $e->getMessage());
        }
    }

}