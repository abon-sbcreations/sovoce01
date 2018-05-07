<?php
/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 */
class DbCon {

    private static $instance;

    public static function singleton() {
        if (!isset(self::$instance)) {
            self::$instance = new DbCon();
        }
        return self::$instance;
    }

}
