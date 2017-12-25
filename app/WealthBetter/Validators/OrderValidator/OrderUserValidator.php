<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 15:15
 */

namespace Wealthbetter\Validators\OrderValidator;

use Wealthbetter\Models\UserInterface;

class OrderUserValidator implements OrderValidatorInterface
{

    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function validate()
    {
        if(!$this->user->issetPaypasswd() || !$this->user->isBindBankcard()){
            throw new Exception('认证条件不满足');
        }
    }
}