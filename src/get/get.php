<?php


namespace Rest237;

class GET extends DATABASE{

    private static function request_control(){

        if(self::$requests == "GET"){
            return true;
        }else{
            return false;
        }
    }

    // TODO: VERİ ÇEKME İŞLEMLERİ YAPILACAK


}