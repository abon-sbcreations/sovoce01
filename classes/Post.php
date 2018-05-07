<?php
/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 7 May, 2018
 */
class Post{
    private  static $_tblPost = 'post';
    public function __construct() { }
    public function __clone() { }

    public static function getList(){
        $db = DbSingle::getObject();
        $result = $db->query("select * from ".self::$_tblPost);
        $rows = [];
        while($row = $result->fetch_row()){
            $rows[] = $row;
        }
        return $rows;
    }
    public static function getDetails($slug = '') {
        $db = DbSingle::getObject();
        $sql1 = "select * from " . self::$_tblPost . " where slug = ?";
        $stmt = $db->prepare($sql1);
        if ($stmt === false) {
            trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
        }
        $stmt->bind_param('s', $slug);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0)
            return ('No Posts Yet');
        return $result->fetch_row();
    }

    public static function addPost(){
        
    }
    public static function editPost($id=null){
        
    }
    public static function deletePost($id=null){
        
    }
}