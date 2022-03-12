<?php
include_once ("DBConfig.php");
class City extends DBConfig
{
    function getAll($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
            $sql = "select * from City where CityName like '%$search%'";
        }
        else
        {
        $sql = "select * from City";
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
        $sql = "select * from City where CityID=$CityID";
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
        
        $sql = "INSERT INTO City (CityID, CityName) VALUES (NULL, '$CityName');";
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

        $sql = "UPDATE City SET CityName = '$CityName' WHERE CityID = $CityID;";
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

        $sql = "DELETE FROM City WHERE CityID = $CityID";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }


}

?>