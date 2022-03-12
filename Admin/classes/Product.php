<?php
include_once ("DBConfig.php");
class Product extends DBConfig
{
    function getAll($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (!isset($page)) {
            $page=1;
        }
        $first = ($page-1)*12;
        $limit=$first+12;
        if (isset($_GET['search'])) {
            $sql = "SELECT p.ProductID,p.ProductName,p.ProductImage,p.ProductDescription,p.ProductPrice,convert(avg(pr.RatingValue),decimal(2,1)) as Average,COUNT(pr.ProductID) as Count FROM Product as p LEFT JOIN productwisereview as pr on p.ProductID=pr.ProductID where p.ProductName like '%$search%' GROUP by p.ProductID LIMIT $first,$limit";
        }
        else{
            $sql = "SELECT p.ProductID,p.ProductName,p.ProductImage,p.ProductDescription,p.ProductPrice,convert(avg(pr.RatingValue),decimal(2,1)) as Average,COUNT(pr.ProductID) as Count FROM Product as p LEFT JOIN productwisereview as pr on p.ProductID=pr.ProductID GROUP by p.ProductID LIMIT $first,$limit";
        }
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function getAllAdmin($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
            $sql="select * from Product where ProductName like '%$search%'";
        }
        else{
            $sql="select * from Product";
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
        $sql = "select * from Product where ProductID=$ProductID";
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
        include_once 'Commons.php';
        //$imagename=$_FILES['ProductImage']['name'];
        $ProductImage=uploadImage($_FILES['ProductImage'],"./uploads/");
        
        $sql = "INSERT INTO product (ProductID, ProductName, ProductImage, ProductDescription, ProductPrice) VALUES (NULL, '$ProductName', '$ProductImage', '$ProductDescription', '$ProductPrice');";
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
        unset($ProductImage);
        include_once 'Commons.php';
        $ProductImage=uploadImage($_FILES['ProductImage'],"./uploads/");

        if ($ProductImage) {
            $objimage = new product();
            $resultimage = $objimage->getByPK($_POST);
            $rowimage = $resultimage[0];
            $dProductImage= $rowimage['ProductImage'];
            unlink($dProductImage);
        }
        else if(!$ProductImage){
            $objimage = new product();
            $resultimage = $objimage->getByPK($_POST);
            $rowimage = $resultimage[0];
            $ProductImage= $rowimage['ProductImage'];
        }

        $sql = "UPDATE product SET ProductName = '$ProductName', ProductImage = '$ProductImage', ProductDescription = '$ProductDescription', ProductPrice = '$ProductPrice' WHERE product.ProductID = $ProductID;";
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
        include_once 'Commons.php';
        $objimage = new product();
        $resultimage = $objimage->getByPK($_GET);
        $rowimage = $resultimage[0];
        $ProductImage= $rowimage['ProductImage'];
        unlink($ProductImage);

        $sql = "DELETE FROM Product WHERE ProductID = $ProductID";
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else{
            return false;
        }
    }

    function count($req)
    {
        extract($this->safeRequest($req));
        $resultArray = array();
        if (isset($search)) {
            $sql = "select count(*) as totalcount from product where ProductName like '%$search%'";
        }
        else{
            $sql = "select count(*) as totalcount from product";
        }
        
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

}

?>