<?php


namespace Rest237;

class DATABASE{
    

    static public $response_array = array(
        'author' => 'coded by 237mrt'
    );
    
    static protected $requests;
    
    function __construct()
    {
        self::requestCheck();
       
    }
    
    protected static function requestCheck(){
        if(self::tokenCheck() == false) return;
        $request = $_GET['request'] ?? "";

        if(!$request){
            $a = array(
                'message' => 'Please make a request',
                'success' => false
            );

            array_push(self::$response_array,$a);
        }else{
            self::$requests = $request;
            
            switch ($request) {
                case 'GET':
                    return true;
                    break;
                
                case 'POST':
                    return true;
                    break;

                default:
                    $a = array(
                        'message' => 'Please specify a valid request',
                        'success' => false
                    );
        
                    array_push(self::$response_array,$a);
                    break;
            }

        }
        

    } 


    private static function tokenCheck(){
        $token = $_GET['authkey'] ?? "";
        
        /** TODO: GET TOKEN DATABASE */
        $get_token = "123";

        if(!$token or $token !== $get_token){
            $a = array(
                'message' => 'Key not found or invalid key',
                'success' => false
            );

            array_push(self::$response_array,$a);
            
        }else{
            return true;
        }

    }



}