<?php
       const title = "Cours php"; /* constante */
       $_css = "./css/style.css";
       $_x = true;
       $_lang = ["fr","en","es"];
       $_version = phpversion();
       $_date_now = date("d/m/Y");
       $_date_object = new dateTime();
       $_user_agent = $_SERVER["HTTP_USER_AGENT"];
       $_signature_server = $_SERVER["SERVER_SIGNATURE"];
   