<?php
/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 * singleton attempted
 */
class DbSingle {

    private static $_instance;
    public function __construct() {
        
    }
    public static function getObject() {
        if (!isset(self::$_instance)) {
            $dObj = new DbSingle();
            self::$_instance = $dObj->getConnection();
        }
        return self::$_instance;
    }
    public function getConnection(){
        return new mysqli(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);
    }
    public function __destruct() { }
}
