<?php
class Order extends Dbconnection {
    
    protected function getOrders() {
        //Query db for all orders, no user input
        $sql = "SELECT * FROM Orders";
        $result = $this->connect()->query($sql);
        return $result;
    }

    protected function setOrder($orderId, $customer, $orderInformation) {
        console_log($orderId." ". $customer." ". $orderInformation);
        $queryorderId = $orderId;
        $queryCustomer = $customer;
        $queryOrderInformation = $orderInformation;
        // create a prepared statement and bind
        //$stmt = $this->connect()->prepare("INSERT INTO Orders (orderId, customer, orderInformation) VALUES (?, ?, ?)");
        $result = $this->connect()->query("INSERT INTO Orders (orderId, customer, orderInformation) VALUES (".$orderId.", ".$customer.", ".$orderInformation.")");
        console_log("first");
        //set parameters and execute
        // $queryorderId = $orderId;
        // $queryCustomer = $customer;
        // $queryOrderInformation = $orderInformation;
        // $stmt->bind_param("iss", $queryorderId, $queryCustomer, $queryOrderInformation);
        // console_log("sec");
        // $stmt->execute();
        console_log("third");
    }

    function console_log($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}