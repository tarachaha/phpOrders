<?php
class OrderItem extends Dbconnection {

    protected function getOrderItems() {
        $sql = "SELECT * FROM OrderItem";
        $result = $this->connect()->query($sql);
        return $result;
    }
    // protected function getOrderItemsForOrder($orderId) {

    // }
    // protected function setOrderItem($stockCode, $quantity, $price, $dueDate, $orderId) {

    // }
}
?>