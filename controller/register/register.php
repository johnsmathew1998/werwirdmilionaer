<?php
include "../../controller/db/db.php";

require "../../class/login.php";

        $arraylogin = $_POST;
            if (Login::register($arraylogin["username"], $arraylogin["password"])) {
                header("Location: ../../index.php?n=success");
            } else {
                header("Location: ../../nav/register.php?n=error");
            }

?>
