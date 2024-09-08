<?php
include_once("../classes/inventory.php");
session_start(); 
$value ="";

$items = Inventory::getItems();
for($i = 0; $i < count($items); $i++) {

    echo $items[$i]->getId() .'_'. $items[$i]->getProdId() .'_'. $items[$i]->getName() .'_'. $items[$i]->getDescription() .'_'. $items[$i]->getQuantity() .'_'. $items[$i]->getLimitQuantity() .'_'. $items[$i]->getPrice() .'_'. $items[$i]->getSellPrice() .'_'. $items[$i]->getAddedBy() .'_'. $items[$i]->getStatus() . '&';

}
?>
