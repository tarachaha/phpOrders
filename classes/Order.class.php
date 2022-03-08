<?php
class Order extends Dbconnection {
    
    protected function getOrders() {
        //Query db for all orders, no user input
        $sql = "SELECT * FROM Orders";
        $result = $this->connect()->query($sql);
        return $result;
    }

    protected function setOrder($customer, $orderInformation) {
        // create a prepared statement and bind
        $stmt = $this->connect()->prepare("INSERT INTO Orders (customer, orderInformation) VALUES (?, ?)");
        $stmt->bind_param("ss", $queryCustomer, $queryOrderInformation);
        //set parameters and execute
        $queryCustomer = $customer;
        $queryOrderInformation = $orderInformation;
        $stmt->execute();
        return $stmt;
        $stmt->close();
        
    }
}