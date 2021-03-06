<?php
class Category
{
    public $cid = 0;
    
    function setId($cid)
    {
        $this->cid = $cid;
    }
    
    function getNameById($cid)
    {
        $name = "";
        
        require("./common/dblogin.php");
        $conn   = new mysqli($servername, $username, $password, $dbname);
        $sql    = "SELECT name FROM file where id = " . $cid;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row  = $result->fetch_assoc();
            $name = $row["name"];
        }
        $conn->close();
        
        return $name;
    }
    
    function getChildrenIds()
    {
        $children = array();
        
        require("./common/dblogin.php");
        $conn   = new mysqli($servername, $username, $password, $dbname);
        $sql    = "SELECT id FROM file where parent_id = " . $this->cid;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($children, $row["id"]);
            }
        }
        $conn->close();
        
        return $children;
    }
    
    function getParentId()
    {
        $parentId = 0;
        
        require("./common/dblogin.php");
        $conn   = new mysqli($servername, $username, $password, $dbname);
        $sql    = "SELECT parent_id FROM file where id = " . $this->cid;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row      = $result->fetch_assoc();
            $parentId = $row["parent_id"];
        }
        $conn->close();
        
        return $parentId;
    }
    
    function getSiblingIds()
    {
        $sibling = array();
        
        require("./common/dblogin.php");
        $conn   = new mysqli($servername, $username, $password, $dbname);
        $sql    = "SELECT id FROM file where parent_id = " . $this->getParentId();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($sibling, $row["id"]);
            }
        }
        $conn->close();
        
        return $sibling;
    }
}
?>