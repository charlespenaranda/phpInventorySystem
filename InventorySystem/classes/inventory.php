<?php
include_once("connection.php");
class Inventory{
	private $id;
	private $prodid;
	private $name;
	private $desc;
	private $quantity;
	private $limitquantity;
	private $price;
	private $sellprice;
	private $addedby;
	private $addeddate;
	private $status;
	function __construct(){

		
	}
	//Setter
	public function setId($id){
		$this->id=$id;
	}
	public function setProdId($prodid){
		$this->prodid=$prodid;
	}
	public function setName($name){
		$this->name=$name;
	}
	public function setDescription($desc){
		$this->desc=$desc;
	}
	public function setQuantity($quantity){
		$this->quantity=$quantity;
	}
	public function setLimitQuantity($limitquantity){
		$this->limitquantity=$limitquantity;
	}
	public function setPrice($price){
		$this->price=$price;
	}
	public function setSellPrice($sellprice){
		$this->sellprice=$sellprice;
	}
	public function setAddedBy($addedby){
		$this->addedby=$addedby;
	}
	public function setAddedDate($addeddate){
		$this->addeddate=$addeddate;
	}
	public function setStatus($status){
		$this->status=$status;
	}
	//Getter
	public function getId(){
		return $this->id;
	}
	public function getProdId(){
		return $this->prodid;
	}
	public function getName(){
		return $this->name;
	}
	public function getDescription(){
		return $this->desc;
	}
	public function getQuantity(){
		return $this->quantity;
	}
	public function getLimitQuantity(){
		return $this->limitquantity;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getSellPrice(){
		return $this->sellprice;
	}
	public function getAddedBy(){
		return $this->addedby;
	}
	public function getAddedDate(){
		return $this->addeddate;
	}
	public function getStatus(){
		return $this->status;
	}

	public static function getItems(){
		$con = new Connection();
		$items = array();
		try{
			$con->open();
			$Result = $con->query("SELECT * FROM [Inventory].[dbo].[Items]");
			$count = 0;
			while ($Row = $con->fetch_array($Result))
			{
				$inventory = new Inventory();
				$inventory->setId($Row['id']);
				$inventory->setProdId($Row['product_id']);
				$inventory->setName($Row['product_name']);
				$inventory->setDescription($Row['product_description']);
				$inventory->setQuantity($Row['quantity']);
				$inventory->setLimitQuantity($Row['crit_qty']);
				$inventory->setPrice($Row['price']);
				$inventory->setSellPrice($Row['selling_price']);
				$inventory->setAddedBy($Row['addedby']);
				$inventory->setAddedDate($Row['datetimeadded']);
				$inventory->setStatus($Row['Status']);
				$items[$count] = $inventory;
				$count++;
			}
			 	$con->close();
			}catch(Exception $e){

		}
		return $items;
	}

}
?>