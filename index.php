<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
        include("es.html");
        break;
    case "en":
        include("en.html");
        break;        
    default:
        include("en.html");
        break;
}
?>