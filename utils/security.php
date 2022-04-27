<?php
session_start();
class Authentication{
    static function login( $uid ){        
        //$_SESSION['authenticated'] = true;
        $_SESSION['uid'] = $uid;
    }
    static function check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function logout(){
        // session_unset();
        // session_destroy();
        unset( $_SESSION['uid'] );
    }
}
class Authorization{

}

?>