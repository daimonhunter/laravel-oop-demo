<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/5
 * Time: 18:08
 */

namespace Wealthbetter\Business;

/**
 * Class FundManagerTrait
 * @package Wealthbetter
 */
trait FundManagerTrait
{

    public function getFundManager($fundManagerId)
    {
        try {
            return $this->fundManagerRepository->fundManagerInfo($fundManagerId);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}