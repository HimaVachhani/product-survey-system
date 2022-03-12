<?php
include_once ("DBConfig.php");
class ProductWiseReview extends DBConfig
{
    function getAll($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
           $sql = "select * from ProductWiseReview p, product pr, user u where p.ProductID=pr.ProductID and p.UserID=u.UserID and pr.ProductName like '%$search%'";
        }
        else
        {
        $sql = "select * from ProductWiseReview p, product pr, user u where p.ProductID=pr.ProductID and p.UserID=u.UserID";
        }
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function reviewproduct($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
           $sql = "select * from ProductWiseReview p, product pr, user u where p.ProductID=pr.ProductID and p.UserID=u.UserID and pr.ProductName like '%$search%'";
        }
        else
        {
            $sql = "select * from ProductWiseReview p, product pr, user u where p.ProductID=pr.ProductID and p.UserID=u.UserID and pr.ProductID=$ProductID";
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
        $sql = "select * from ProductWiseReview where ProductWiseReviewID=$ProductWiseReviewID";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function checkforupdate($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        $sql = "select * from ProductWiseReview where ProductID=$ProductID and UserID=$UserID";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function UserWiseReview($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        $sql = "select * from ProductWiseReview as pr,product as p where pr.UserID=$UserID and p.ProductID=pr.ProductID";
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
        
        $sql = "INSERT INTO productwisereview (ProductWiseReviewID, ProductID, UserID, RatingValue, RatingText) VALUES (NULL, '$ProductID', '$UserID', '$RatingValue', '$RatingText');";
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

        $sql = "UPDATE productwisereview SET ProductID = '$ProductID', UserID = '$UserID', RatingValue = '$RatingValue', RatingText = '$RatingText' WHERE productwisereview.ProductWiseReviewID = $ProductWiseReviewID;";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function updateuser($req)
    {
        extract($this->safeRequest($req));

        $sql = "UPDATE productwisereview SET ProductID = '$ProductID', UserID = '$UserID', RatingValue = '$RatingValue', RatingText = '$RatingText' WHERE productwisereview.ProductID = $ProductID and productwisereview.UserID=$UserID;";
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

        $sql = "DELETE FROM ProductWiseReview WHERE ProductWiseReviewID = $ProductWiseReviewID";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function reviewcount()
    {
        $resultArray = array();
        $sql = "select count(distinct(ProductID)) as reviewcount from ProductWiseReview";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function avgrating()
    {
        $resultArray = array();
        $sql = "select convert(avg(RatingValue),decimal(2,1)) as avgrating from ProductWiseReview";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

}

?>