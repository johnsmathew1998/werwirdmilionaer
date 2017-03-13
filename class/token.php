<?php
include "../../controller/db/db.php";
class token{
    public static function createToken($id) {
        global $con;
        $token = hash("sha256", rand(1, 999999999) . "av" . $id . "ec" . time());
        $stat = $con->query("INSERT INTO token (id_token, id_user) VALUES ('$token','$id')");
        return $token;
    }

    public static function deleteToken($id){

    }
}