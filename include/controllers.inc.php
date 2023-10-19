<?php
       const title = "Cours php"; /* constante */
      
       $_version = phpversion();
       $_date_now = date("d/m/Y");
       $_date_object = new dateTime();
       $_user_agent = $_SERVER["HTTP_USER_AGENT"];
       $_signature_server = $_SERVER["SERVER_SIGNATURE"];

 class User{
    public $_css = "./css/style.css";
    public $_lang = ["fr","en","es"];
    static function dateNow(){
        $_date_object = new dateTime();
        return $_date_object->format("Y");
    }
    static $_tab = [
        "Nom" => "Ledorf",
        "Prénom" => "Rasmus",
        "date" => 1994,
        "mail" => "l.rasmus@php.net"
    ];
    static function userAgent(){
          $_user_agent = $_SERVER["HTTP_USER_AGENT"];

 }
}
 $_user_new = new User();


   
