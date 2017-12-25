<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/5
 * Time: 17:14
 */

namespace Wealthbetter\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    /**
     * @var string table name
     */
    protected $table = 'wb_users';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}