<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 20:53
 */

namespace Wealthbetter\Repositories;

use Wealthbetter\Models\FundManagerInfoModel;
use Wealthbetter\Models\FundManagerNotesModel;

class FundManagerRepository
{

    /**
     * @var FundManagerInfoModel
     */
    private $fundManagerInfoModel;

    /**
     * @var FundManagerNotesModel
     */
    private $fundManagerNotesModel;

    public function __construct(FundManagerInfoModel $fundManagerInfoModel, FundManagerNotesModel $fundManagerNotesModel)
    {
        $this->fundManagerInfoModel = $fundManagerInfoModel;
        $this->fundManagerNotesModel = $fundManagerNotesModel;
    }


    public function fundManagerInfo($fundManagerId)
    {
        try {
            return array_merge(
                $this->fundManagerInfoModel->where('customer_id', $fundManagerId)->get()->toArray(),
                $this->fundManagerNotesModel->where('manager_id', $fundManagerId)->get()->toArray());
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}