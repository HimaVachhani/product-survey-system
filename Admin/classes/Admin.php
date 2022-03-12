<?php
include_once ("DBConfig.php");
class Admin extends DBConfig
{
    function getAll($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
         if (isset($search)) {
            $sql = "select * from Admin where AdminName like '%$search%'";
        }
        else
        {
            $sql = "select * from Admin";
        }
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function getByPK($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        $sql = "select * from Admin where AdminID=$AdminID";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function insert($req)
    {
        extract($this->safeRequest($req));
        
        $sql = "INSERT INTO Admin (AdminID, AdminName, AdminPassword) VALUES (NULL, '$AdminName','$AdminPassword');";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }
    function update($req)
    {
        extract($this->safeRequest($req));

        $sql = "UPDATE Admin SET AdminName = '$AdminName', AdminPassword='$AdminPassword' WHERE AdminID = $AdminID;";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function delete($req)
    {
        extract($this->safeRequest($req));

        $sql = "DELETE FROM Admin WHERE AdminID = $AdminID";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function checkLogin($req){
        
        extract($this->safeRequest($req));

        $sql = "SELECT * FROM admin WHERE AdminName='$AdminName' and AdminPassword='$AdminPassword'";
        $result = mysqli_query($this->con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            return $row;
        }
        else{
            return false;
        }
    }
}

?>