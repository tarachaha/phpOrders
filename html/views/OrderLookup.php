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
    <title>Order Lookup</title>
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
    <h1>Order Lookup:</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Order Id:  <input type="text" name="orderId">
        <input type="submit">
    </form>
</div>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $formcontroller = new OrderItemView();
        $formcontroller->showItemsForOrder();
    }
?>
</body>
</html>