<?php

    class User{
        public $_link ="./css/style.css";
        static $_lang = ["fr","en"];
        static $_image = "./asset/a.png";
       
        //fonction
        static function localDate(){
            $_dates = new DateTime();
            print $_dates->format("Y");
        }
    }

    $_user = new User();
