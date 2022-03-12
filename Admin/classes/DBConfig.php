<?php
/**
 * Created by PhpStorm.
 * User: Omen
 * Date: 03-11-2017
 * Time: 01:17 PM
 */

class DBConfig
{
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost","root","","product_survey_system");
        mysqli_query($this->con,"SET time_zone = '+5:30';");
        if(mysqli_connect_errno())
        {
            return false;
        }
    }
    function safeRequest($req)
    {
        $safeReq = array();
        foreach ($req as $key=>$value)
        {
            $safeReq[$key] = trim(mysqli_real_escape_string($this->con,$value));
        }
        return $safeReq;
    }

}
?>