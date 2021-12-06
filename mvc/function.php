<?php
    
    function redirect($url)
    {
        header("Location: $url");
    }

    function setID($id)
    {
        session_start();
        $_SESSION['one-time-id'] = $id;
    }
    function getID()
    {
        if (isset($_SESSION['one-time-id']))
        {
            $value = $_SESSION['one-time-id'];
            unset($_SESSION['one-time-id']);
            return $value;
        }
        return null;
    }
?>