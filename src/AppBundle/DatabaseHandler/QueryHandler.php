<?php
/**
 * Created by PhpStorm.
 * User: Pushpa
 * Date: 12/22/2016
 * Time: 6:11 PM
 */
namespace AppBundle\DatabaseHandler;

class QueryHandler{

    protected $success = false;

    /**
     * @param Register $register
     * @return bool
     */
    public function Register(Register $register){

        $connectionHandler = new ConnectionHandler();
        $connection = $connectionHandler->connect();

        $a = $register->getTelNumber();
        $b = $register->getEmail();
        $c = $register->getPassword();
        $d = $register->getFirstName();
        $e = $register->getLastName();

        $user_type = $register->getUserType();

        switch ($user_type){
            case 'customer':
                $query = "INSERT INTO customer(tel_number,email,password,first_name,last_name) VALUES ('$a','$b',' $c','$d','$e')";
                break;
            case 'driver' :
                $query = "INSERT INTO driver(tel_number,email,password,first_name,last_name) VALUES ('$a','$b',' $c','$d','$e')";
                break;
            case 'admin' :
                $query = "INSERT INTO admin(tel_number,email,password,first_name,last_name) VALUES ('$a','$b',' $c','$d','$e')";
                break;
            default:
                $query = null;
                break;
        }

        var_dump($query);
        if($connection['success'] == true){
            $results = mysqli_query($connection['con'],$query);
            $connectionHandler->disconnect();
            return $results;
        }else{
            return $this->success;
        }
    }

    public function Login(Login $login){
        $connectionHandler = new ConnectionHandler();
        $connection = $connectionHandler->connect();

        $tel_number = $login->getTelNumber();
        $password = $login->getPassword();


        $user_type = $login->getUserType();

        switch ($user_type){
            case 'customer':
                $query = "SELECT 'first_name' FROM customer WHERE 'tel_number' = '$tel_number' AND 'password' = '$password'";
                break;
            case 'driver' :
                $query = "SELECT 'first_name' FROM driver WHERE 'tel_number' = '$tel_number' AND 'password' = '$password'";
                break;
            case 'admin' :
                $query = "SELECT 'first_name' FROM admin WHERE 'tel_number' = '$tel_number' AND 'password' = '$password'";
                break;
            default:
                $query = null;
                break;
        }

        var_dump($query);

        if($connection['success'] == true){
            $results = mysqli_query($connection['con'],$query);
            $num_rows = mysqli_num_rows($results);
            //var_dump($num_rows);

            if($num_rows != 0){
                $this->success = true;
            }
            $connectionHandler->disconnect();
        }
        return $this->success;
    }

    public function validate($object){
        if($object != ''){

        }
    }

}