<?php
include "../controller/db/db.php";

class register {
    function newregister() {
        global $con;
        $arraylogin = $_POST;
        $this->getconnection($arraylogin);

        $stat_query = $con->query(" SELECT * FROM user");
        $result = $stat_query->fetch(PDO::FETCH_ASSOC);

        var_dump($stat_query);
    }
    
    function getconnection($unameandpw){
       $uname = $unameandpw[0];
       $pw = $unameandpw[1];

        $con = new connection();
        $con->con($uname,$pw);


    }
}
?>
