<?php
include "../../controller/db/db.php";

require "../../class/login.php";

$arraylogin = $_POST;
        if ($token = Login::checkLogin($arraylogin["username"], $arraylogin["password"])) {
            header("Location: ../../index.php?n=successToken=".$token);
         } else {
            header("Location: ../../index.php?n=failed");
    }

?>