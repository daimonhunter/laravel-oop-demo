<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 17:05
 */

namespace Wealthbetter\Validators\ProductValidator;

use Wealthbetter\Models\User;
use Wealthbetter\Models\Product;

class ProductUserValidator implements ProductValidatorInterface
{

    protected $user;

    public function __construct(User $user,Product $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function validate()
    {
        if($this->user->getGroup() != $this->product->allowGroup()){
            throw new ValidationiException('禁止购买该类产品');
        }
    }

}