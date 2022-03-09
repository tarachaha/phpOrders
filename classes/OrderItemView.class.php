<?php
class OrderItemView extends OrderItem {

    public function showAllOrderItemsTable() {
        $results = $this->getOrderItems();
        if ($results->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Stock Code</th><th>quantity</th><th>Price</th><th>Due Date</th><th>Order Id</th></tr>";
        
            while ($row = $results->fetch_assoc()) {
                // iterate through order items
                echo "<tr><td>".$row["id"]."</td><td>".$row["stockCode"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td>".$row["dueDate"]."</td><td>".$row["orderId"]."</td>";
                
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    public function showItemsForOrder() {
        $results = $this->getOrderItemsForOrder($_POST["orderId"]);
        if ($results->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Stock Code</th><th>quantity</th><th>Price</th><th>Due Date</th><th>Order Id</th></tr>";
        
            while ($row = $results->fetch_assoc()) {
                // iterate through order items
                echo "<tr><td>".$row["id"]."</td><td>".$row["stockCode"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td>".$row["dueDate"]."</td><td>".$row["orderId"]."</td>";
                
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}