<?php
class Product
{
    public $fileId = 0;
	public $reckonProductId = "";
	public $sku = "";
	public $height = 0;
    
    function setId($cid)
    {
        $this->cid = $cid;
    }
}