<?php
class Product
{
    function getProductsBySearch($searchString)
    {
        $products = array();
        
        require("../common/dblogin.php");
        $conn   = new mysqli($servername, $username, $password, $dbname);
        $sql    = "SELECT * FROM product where sku like '%" . $searchString . "%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Product                  = new product();
                $Product->fileId          = $row["file_id"];
                $Product->reckonProductId = $row["reckon_product_id"];
                $Product->sku             = $row["sku"];
                $Product->height          = $row["height"];
                array_push($products, $Product);
            }
        }
        $conn->close();
        
        return $products;
    }
}