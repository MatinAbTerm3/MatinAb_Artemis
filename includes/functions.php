<?php

include 'DB.php';

if(! function_exists('alertTemplate'))
{
    function alertTemplate($text,$type)
    {
        $alert ="
            <article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
                {$text}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>    
            </articale>";
        return $alert;
    }
}


if(! function_exists('redirect'))
{
    function redirect($address)
    {
        header("Location: {$address}");
        exit();
    }
}

?>