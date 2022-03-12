<?php
class OrderContr extends Order {
    public function addOrder() {
        // $stockCode = $quantity = $price = $dueDate = $orderId = "";
        console_log("addOrder started");
        //     $customer = ($_POST["customer"]);
        //     $customerInformation = $_POST["customerInformation"];
            $this->setOrder($_POST["orderId"], $_POST["customer"], $_POST["customerInformation"]);
            console_log("executed is post");
        // console_log("after if addorder");
    }
    // function console_log($data) {
    //     $output = $data;
    //     if (is_array($output))
    //         $output = implode(',', $output);
    
    //     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    // }
}