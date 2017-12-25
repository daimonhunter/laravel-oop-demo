<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/4
 * Time: 17:26
 */

namespace Wealthbetter\Services;

use Wealthbetter\Repositories\UserRepository;
use Illuminate\Validation\ValidationException;

/**
 * Class BaseService
 * @package Wealthbetter\Services
 */
class BaseService {

    /**
     * @var UserInterface
     */
    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $validators
     * @throws Exception
     */
    public function validator(array $validators)
    {
        try{
            foreach($validators as $validator){
                $validator->validate();
            }
        } catch (ValidationException $e) {
            throw new Exception($e->getMessage());
        }
    }

}