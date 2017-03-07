<?php

require_once 'C:/xampp/htdocs/lernkompetenzen/include/config.controller'; //<--- Bei Verschiebung der Datei hier anpassen
require_once AB_URL . 'classes/Token.controller';
require_once AB_URL . 'classes/Noten.controller';
require_once AB_URL . 'classes/Lernender.controller';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if (isset($_COOKIE["token"])) {
    $token = new Token($_COOKIE["token"]);
    if ($token->isValid()) {
        define('VORNAME', $token->getVorname());
        define('NACHNAME', $token->getNachname());
    } else {
        header("Location: " . AB_URL_HOST . "controller/logout.controller?redirect=true");
        exit;
    }
    $ordner_rolle = explode("/",$_SERVER['REQUEST_URI'])[2];
    if($ordner_rolle!=$token->getRolle()&&$ordner_rolle!="view"&&$ordner_rolle!="controller"){
        header("Location: ".AB_URL_HOST.$token->getRolle()."/");
    }
} else {
    if ("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] != AB_URL_HOST . "lernender/login.controller") {
        header("Location:" . AB_URL_HOST . "lernender/login.controller");
    }
}
?>