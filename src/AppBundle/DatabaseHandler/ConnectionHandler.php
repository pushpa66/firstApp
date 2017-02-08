<?php
/**
 * Created by PhpStorm.
 * User: Pushpa
 * Date: 12/22/2016
 * Time: 6:00 PM
 */
namespace AppBundle\DatabaseHandler {

    class ConnectionHandler{
        protected $_my_host = "localhost";
        protected $_my_user = "root";
        protected $_my_password = "";
        protected $_my_database = "taxiapp";
        protected $con;
        protected $success = false;
        protected $connection = null;

        public function connect(){
            $this->con = mysqli_connect($this->_my_host,$this->_my_user,$this->_my_password,$this->_my_database);
            $success = true;
            return(array('con'=>$this->con,'success'=>$success));
        }

        public function disconnect(){
            mysqli_close($this->con);
        }
    }
}