<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/5
 * Time: 17:15
 */

namespace Wealthbetter\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttrModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'wb_products_extended';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
}