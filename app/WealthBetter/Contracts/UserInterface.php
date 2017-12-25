<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/6/29
 * Time: 20:36
 */

namespace Wealthbetter\Contracts;

interface UserInterface {
    public function issetPaypasswd();
    public function isBindBankcard();
    public function getGroup();
}