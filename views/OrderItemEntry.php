<?php
    include '../includes/viewautoloader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <title>Order Item Entry</title>
</head>
<body>
    <div class="navigationpanel">
        <ul class="navbuttonslist">
            <li class="navli"><a href="/rotainterview/">Home</a></li>
            <li class="navli"><a href="/rotainterview/views/OrderEntry.php">Order Entry</a></li>
            <li class="navli"><a href="/rotainterview/views/OrderItemEntry.php">Order Item Entry</a></li>
            <li class="navli"><a href="/rotainterview/views/OrderList.php">Order List</a></li>
            <li class="navli"><a href="/rotainterview/views/OrderItemList.php">Order Item List </a></li>
            <li class="navli"><a href="/rotainterview/views/OrderLookup.php">Order Lookup </a></li>
        </ul>
    </div>
<div class="pagecontent">
    <h1>Order Item Entry:</h1>
    
    <div class="customformdiv"> 
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        
        Stock Code:<input type="text" name="stockCode">
     
        Quantity: <input type="text" name="quantity">

        Price: <input type="text" name="price">

        Due Date: <input type="text" name="dueDate">
  
        Order Id: <input type="text" name="orderId">
   
        <input type="submit">
        </form>
        
    </div>
</div>
<?php
    $formcontroller = new OrderItemContr();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $formcontroller->addDebug($_POST["stockCode"], $_POST["quantity"],$_POST["price"],$_POST["dueDate"],$_POST["orderId"]);
    }
    function console_log($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    console_log("console works");
?>

</body>
</html>