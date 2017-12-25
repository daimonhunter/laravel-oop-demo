<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 20:30
 */

namespace Wealthbetter\Repositories;

use Wealthbetter\Models\UserModel;

class UserRepository {

    /**
     * @var UserModel
     */
    private $userModel;

    /**
     * @param UserModel $userModel
     */
    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function issetPaypasswd(){
        return true;
    }

    public function isBindBankcard(){
        return true;
    }

    public function getGroup(){
        return true;
    }

}