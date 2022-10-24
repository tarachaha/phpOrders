<?php
class OrderItem extends Dbconnection {

    protected function getOrderItems() {
        $sql = "SELECT * FROM OrderItem";
        $result = $this->connect()->query($sql);
        return $result;
    }
    protected function getOrderItemsForOrder($orderId) {
        $sql = "SELECT * FROM OrderItem WHERE orderId = ($orderId)";
        $result = $this->connect()->query($sql);
        return $result;
    }
    protected function setOrderItem($stockCode, $quantity, $price, $dueDate, $orderId) {
        //create prepared statement and bind
        console_log("excuted setOrder" . $stockCode.$quantity.$price.$dueDate. $orderId);
        $stmt = $this->connect()->prepare("INSERT INTO OrderItem (stockCode, quantity, price, dueDate, orderId) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iidsi", $queryStockCode, $queryQuantity, $queryPrice, $querydueDate, $queryOrderId);
        //set parameters and execute
        $queryStockCode = $stockCode;
        $queryQuantity = $quantity;
        $queryPrice = $price;
        $querydueDate = $dueDate;
        $queryOrderId = $orderId;
        $stmt->execute();
        console_log("done setOrder");
        echo "write done";
        $stmt->close();
    }
    function console_log($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}
?>