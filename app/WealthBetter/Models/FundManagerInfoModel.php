<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/5
 * Time: 17:15
 */

namespace Wealthbetter\Models;

use Illuminate\Database\Eloquent\Model;

class FundManagerInfoModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'wb_fund_manager_info';
    /**
     * @var string
     */
    protected $primaryKey = 'customer_id';
}