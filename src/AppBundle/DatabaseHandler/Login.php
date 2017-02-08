<?php
/**
 * Created by PhpStorm.
 * User: Pushpa
 * Date: 12/22/2016
 * Time: 5:57 PM
 */

namespace AppBundle\DatabaseHandler;
use Symfony\Component\HttpFoundation\Request;

class Login {
    protected $_tel_number;
    protected $_password;
    protected $_user_type;

    /**
     * Login constructor.
     * @param Request $request
     * @internal param $_tel_number
     * @internal param $_password
     */
    public function __construct(Request $request)
    {
        $this->_tel_number = $request->get("tel_number");
        $this->_password = $request->get("password");
        $this->_user_type = $request->get('user_type');
    }

    /**
     * @return mixed
     */
    public function getTelNumber()
    {
        return $this->_tel_number;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->_user_type;
    }

}
