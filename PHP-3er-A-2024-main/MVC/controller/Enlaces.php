<?php

final class Enlaces 
{
    function index() {

        if(isset($_GET["action"])){
            $enal = $_GET["action"];
            //echo $enal;
        }else{
            $enal = "index";
            
        }
        $enlacesContr = Model_enlaces::enlaces_model($enal);
        //echo $enlacesContr;
        include $enlacesContr;
    }
}
