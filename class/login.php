<?php
require "token.php";
class Login{
    public static function register($username, $password){
        global $con;
        $stat_query = $con->query(" SELECT * FROM login where login_name = '$username'");
        $stat_query->fetch(PDO::FETCH_ASSOC);

        if ($stat_query->rowCount() == 0) {
            $loginnotexist = true;
        } else {
            $loginnotexist = false;
        }
        $stat_query = $con->query("SELECT max(idlogin) FROM login");
        $loginid = $stat_query->fetch(PDO::FETCH_ASSOC);

        $role = 'gamer';

        try{
            if ($loginnotexist == true){
                $con->query(" INSERT INTO login ( login_name, password, role ) VALUES ( '$username' ,'$password', '$role' )");
                return true;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function checkLogin($username, $password){
        global $con;
        $stat_query = $con->query("SELECT * FROM login where login_name = '$username'");
        $result = $stat_query->fetch(PDO::FETCH_ASSOC);

        if ($result['password'] == $password){
            $tokenid = $result['idlogin'];
            $otoken = new token;
            $token = $otoken->createToken($tokenid);
            return $token;
        }
    }
}