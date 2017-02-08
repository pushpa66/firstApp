<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\DatabaseHandler\Login;
use AppBundle\DatabaseHandler\QueryHandler;
use AppBundle\DatabaseHandler\Register;

/**
 * @Route("/api", name="api")
 */
class  ApiController extends DefaultController {

    /**
     * @Route("/register", name="apiRegister")
     * @param Request $request
     * @return Response
     */
    public function Register(Request $request){
        $register = new Register($request);
        $queryHandler = new QueryHandler();
        $object = $queryHandler->Register($register);

        $response =  $this->apiSendResponse($object);
        return $response;
    }

    /**
     * @Route("/login", name="apiLogin")
     * @param Request $request
     * @return Response
     */
    public function Login(Request $request){

        $login = new Login($request);
        $queryHandler = new QueryHandler();
        $object = $queryHandler->Login($login);

        $response =  $this->apiSendResponse($object);
        return $response;
    }

    /**
     * @Route("/test", name="apiTest")
     * @param Request $request
     * @return Response
     * @internal param Request $request
     */
    public function Test(Request $request){
        var_dump($request->get('name'));
        $object = $request->get('name');
        $response = $this->apiSendResponse($object);
        return $response;
    }
    protected function apiSendResponse($object){
        $response =  new Response($this->objectSerialize($object));
        $responseHeaders = $response->headers;
        $responseHeaders->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $responseHeaders->set('Access-Control-Allow-Origin', '*');
        $responseHeaders->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        return $response;
    }
    protected function objectSerialize($object){

        return json_encode($object);
    }

    protected function objectDeserialize($text){

        return json_decode($text);
    }

    protected function isAPIAuthenticated($user){

    }
}