<?php
    function autoloader($className){
        include "controllers/$className.php";
    }
    spl_autoload_register("autoloader");
?>
