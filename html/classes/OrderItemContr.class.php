<?php
class OrderItemContr extends OrderItem {
    
    public function addOrderItem() {
        $stockCode = $quantity = $price = $dueDate = $orderId = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $stockCode = $this->test_input($_POST["stockCode"]);
            $quantity = $this->test_input($_POST["quantity"]);
            $price = $this->test_input($_POST["price"]);
            $dueDate = $this->test_input($_POST["dueDate"]);
            $orderId = $this->test_input($_POST["orderId"]);
            $this->setOrderItem($stockCode, $quantity, $price, $dueDate, $orderId);
            console_log("executed is post");
        }
        console_log("after if addorder");
    }
    function addDebug($stockCode, $quantity, $price, $dueDate, $orderId) {
        $this->setOrderItem($stockCode, $quantity, $price, $dueDate, $orderId);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function console_log($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}