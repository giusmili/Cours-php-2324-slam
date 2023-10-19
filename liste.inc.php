<?php
    print "</ul>";
    //tableaux assoc const user array()
  
  /*   print "<pre>";
        print_r(user);
    print "</pre>"; */

    print "<ul>";
        foreach(User::$_tab as $_key => $_value){
            $_key !== "mail" ? print "<li>".$_key." ".$_value."</li>":

            print '<li>'.$_key.' <a href="mailto:'.$_value.'">'.$_value.'</a></li>';
                
        }
        
    print "</ul>";