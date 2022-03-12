<?php
include_once ("DBConfig.php");
class User extends DBConfig
{
    function getAll($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
            $sql = "select * from User u, city c where u.CityID=c.CityID and u.UserName like '%$search%'";
        }
        else
        {
            $sql = "select * from User u, city c where u.CityID=c.CityID";
        }
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function usercity($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
            $sql = "select * from User u, city c where u.CityID=c.CityID,c.CityID=$CityID and u.UserName like '%$search%'";
        }
        else
        {
            $sql = "select * from User u, city c where u.CityID=c.CityID and c.CityID=$CityID";
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
        $sql = "select * from User where UserID=$UserID";
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
        
        $sql = "INSERT INTO user (UserID, UserName, Password, FirstName, MiddleName, LastName, MobileNumber, EmailAddress, Address, CityID) VALUES (NULL, '$UserName', '$Password', '$FirstName', '$MiddleName', '$LastName', '$MobileNumber', '$EmailAddress', '$Address', '$CityID');";
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

        $sql = "UPDATE user SET UserName = '$UserName', Password = '$Password', FirstName = '$FirstName', MiddleName = '$MiddleName', LastName = '$LastName', MobileNumber = '$MobileNumber', EmailAddress = '$EmailAddress', Address = '$Address', CityID = '$CityID' WHERE user.UserID = $UserID;";
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

        $sql = "DELETE FROM User WHERE UserID = $UserID";
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

        $sql = "SELECT * FROM User WHERE UserName='$UserName' and Password='$Password'";
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