<?php include '../conn.inc.php'; ?>
<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
        $r=mysqli_query($conn,"select firstName from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $userName=mysqli_fetch_assoc($r)['firstName'];
	}else{
        header("Location: login.php");
        exit;
    }
?>
<?php
$product_id = (int)$_GET['id'];
// echo $product_id;
$price_t = $_GET['total'];
// echo gettype($product_id);
// $product = $_POST['title'];

 $product1 =mysqli_query($conn,"select title, newPrice from productdetails where id='$product_id'") or die(mysqli_error($conn));
 $product = mysqli_fetch_array($product1);
    // echo $product['newPrice'];
    $trxid = rand(10, 100);
    $trxid1 = rand(9, 99);
    $num = date("dYm", strtotime("now"));
    // echo $trxid1.$num.$trxid;
    $trxid = $trxid.$num.$trxid;
    // echo $trxid;
    $status = 'placed';
    $hash = 'hdfjsajk848nfs@kgfd';
    $key = '23535453';
    $email = 'someone@gmail.com';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Transaction</title>
    <style>
        /* .container{
            height: 100vh;
            width: 100%;
        } */
        .transaction{
            /* height: 100vh; */
            width: 500px;
            margin: 100px auto;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            /* flex-direction: column; */
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="transaction">
        <form action="success.php" method="post">

            <div class="row">
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" value="Total Items">
                </div>
                
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="amount" class="form-control" id="price" value="<?php echo $price_t ?>">
                </div>
            </div>
            <div class="row">
                
                <div class="mb-3 ">
                    <!-- <label for="file" class="form-label">Upload Reciept</label> -->
                    <!-- <input type="file" class="form-control" > -->
                </div>
            </div>
            <div class="row">
                <input type="hidden" name="txnid" value="<?php echo $trxid; ?>">
                <input type="hidden" name="productinfo" value="<?php echo $product_id; ?>">
                <input type="hidden" name="status" value="<?php echo $status; ?>">
                <input type="hidden" name="hash" value="<?php echo $hash; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="key" value="<?php echo $key; ?>">
                <input type="hidden" name="firstname" value="<?php echo $userName; ?>">
                <div class="">
                    
                <button style="width: 100%;" type="submit" class="btn btn-primary btn-lg" name="pay">Pay Now</button>
            </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>