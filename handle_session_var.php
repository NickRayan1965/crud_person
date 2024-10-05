<?php 
    function showContenBySessionKey($key, $file){
        if (isset($_SESSION[$key])) {
            include($file);
            session_unset();
        }
    }
?>