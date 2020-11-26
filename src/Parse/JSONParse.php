<?php

namespace Codenom\Midtrans\Parse;

class JSONParse
{
    /**
     * Encode data
     * 
     * @var \Laminas\Json\Json
     * @param mixed
     * @return JSON Encode
     */
    public static function encode($param, bool $bool = true)
    {
        return \Laminas\Json\Json::encode($param, $bool);
    }

    /**
     * Decode data from Object return
     * 
     * @var \Laminas\Json\Json
     * @param array
     * @return object
     */
    public static function decodeFromObject($param)
    {
        return \Laminas\Json\Json::decode($param, \Laminas\Json\Json::TYPE_OBJECT);
    }

    /**
     * Decode data from Array return
     * 
     * @var \Laminas\Json\Json
     * @param array
     * @return array
     */
    public static function decodeFromArray($param)
    {
        return \Laminas\Json\Json::decode($param, \Laminas\Json\Json::TYPE_ARRAY);
    }
}
