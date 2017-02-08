<?php

namespace AppBundle\DatabaseHandler;

use Symfony\Component\HttpFoundation\Request;

class Register {
    protected $_tel_number;
    protected $_email;
    protected $_password;
    protected $_first_name;
    protected $_last_name;
    protected $_user_type;

    /**
     * Login constructor.
     * @param Request $request
     * @internal param $_name
     */
    public function __construct(Request $request)
    {
        $this->_name = $request->get('tel_number');
        $this->_firstName = $request->get('email');
        $this->_lastName = $request->get('password');
        $this->_age = $request->get('first_name');
        $this->_email = $request->get('last_name');
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
    public function getEmail()
    {
        return $this->_email;
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
    public function getFirstName()
    {
        return $this->_first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->_last_name;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->_user_type;
    }


}