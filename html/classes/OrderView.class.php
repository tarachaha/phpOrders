<?php
class OrderView extends Order {

    public function showOrdersTable() {
        $results = $this->getOrders();
        if ($results->num_rows > 0) {
            echo "<table><tr><th>Order ID</th><th>Customer</th><th>Information</th><th>Order date</th></tr>";
        
            while ($row = $results->fetch_assoc()) {
                // iterate through order items
                echo "<tr><td>".$row["orderId"]."</td><td>".$row["customer"]."</td><td>".$row["orderInformation"]."</td><td>".$row["orderDate"]."</td><td>".$row["dueDate"]."</td></tr>";
                
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}