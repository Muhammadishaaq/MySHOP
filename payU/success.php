

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/head.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/footer.css">
    
    <title>OnlineShop</title>
    <style type="text/css">
        .container{
            width: 100%;
            margin: 200px auto;
            text-align: center;
        }
    </style>
</head>

<?php include '../conn.inc.php';
 ?>
<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php
    

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$prods=@$_SESSION["prods"];
$salt="YSm0MskVKa";

?>

<?php
	if (@$_SESSION['login']==true ){
 
        $_SESSION['rel']=true;
        $uid=$_SESSION['userid'];
        $date= date("Y-m-d");
        $r=mysqli_query($conn,"INSERT INTO `transactions`(`txnId`, `uid`, `products`, `amount`,`date`) VALUES ('$txnid',$uid,'$prods','$amount','$date')") or die(mysqli_error($conn));
        if(@$_SESSION['fromCart']==true){
            
            $r=mysqli_query($conn,"update userdetailstb set cart='[]' where id='$uid'") or die(mysqli_error($conn));
        }
        $cart=(json_decode($prods,TRUE));
        foreach($cart as $i => $value){  
            $selectQuery="select * from productdetails where id=$i";
            $r=mysqli_query($conn,$selectQuery);
            $newStock=mysqli_fetch_assoc($r)['stock']-$value;
            $Query="update productdetails set stock=$newStock where id = $i";
            $qu = mysqli_query($conn,$Query) or die(mysqli_error($conn));
            $sq="select * from productsale where productId=$i";
            $rs=mysqli_query($conn,$sq);
            $sold=mysqli_fetch_assoc($rs)['sold']+$value;
            $Query="update productsale set sold=$sold where productId = $i";
            $qu = mysqli_query($conn,$Query) or die(mysqli_error($conn));
        }
        // echo "you will be redirected to home page in 3 secs!!";
        // echo "<script>setTimeout(\"location.href = '../';\",3000);</script>";
    }else{
        header("Location: login.php");
        exit;
    }
?>
<div class="container">

<?php
// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        // $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        // $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		//  $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>Please pay a bill of of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }

?>	
     <a href="PayUMoney_form.php" class="btn btn-primary">Pay With PayPal</a>
     <a href="../hpc/transaction.php"  class="btn btn-primary">Pay With JazzCash</a> 
     <a href="../index.php"  class="btn btn-primary">Return to Homepage</a> 


<!-- <a href="../index.php">Go Back</a> -->


</div>