<?php
class Auth {

    public static function isLoggedIn() {

        return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];        
    }
/**
 * require user to be logged in
 */
   public static function requireLogin() {
    if (! static::isLoggedIn()) {
        die("unathorized");
    }
   }

   public static function login() {
    session_regenerate_id(true);

     $_SESSION['is_logged_in'] = true;
   }

   public static function logout() {
            /**
         * the following code checks for cookies and deletes them on session end.
         */
        $_SESSION = array();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
        }

        session_destroy();
   }
}