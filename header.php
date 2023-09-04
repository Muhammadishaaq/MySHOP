<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require 'conn.inc.php';
    $cate="";
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
        $r=mysqli_query($conn,"select firstName from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $userName=mysqli_fetch_assoc($r)['firstName'];
	}else{
        $login=false;
        $userName="My Account";
    }

?>
<!DOCTYPE html>
<html lang="en">
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
    
    <title>MySHOP</title>
</head>
<body>
    <header class="head">
    <!-- <div class="container"> -->
        <nav class=" navbar navbar-dark navbar-expand-md justify-content-between" style="background-color: #345B63;">
        
            <a class="navbar-brand" href="index.php">
            <h3 style="font-family: cursive;">MySHOP </h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav collapsenav">
                    <li class="nav-item active">
                        <a  href="index.php" class="nav-link" id="index">Home</a>
                    </li>
                    
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav collapsenav">
                    <li class="nav-item">

                    <?php if(@$login){?>
                            <a href="logout.php" class="nav-link"><span class="fa fa-lock"></span> Logout
                        <?php }else{ ?>
                            <a href="login.php" class="nav-link"><span class="fa fa-lock"></span> Login
                        <?php } ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="myaccount.php" class="nav-link"><span class="fa fa-user"></span> <?php echo $userName; ?></a>
                    </li>
                    
                </ul>
            </div> 
             
        </nav>
        <!-- </div> -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container">
                <div class="col-sm-10 seiarchbar">    
                    <form method="GET" action="shop.php">
                        
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <select name="category" class="form-control  text-white" id="category" style="background-color: #345B63;">
                        <option value="" <?php
                                                            if(($cate)==('')){
                                                                echo  "selected";
                                                            } ?>>Select category</option>
                        <option value="clothes" <?php
                                                            if(($cate)==('clothes')){
                                                                echo  "selected";
                                                            } ?>>Clothes</option>
                            <option value="shoes" <?php
                                                            if(($cate)==('shoes')){
                                                                echo  "selected";
                                                            } ?> >Shoes</option>
                            
                            <option value="perfume" <?php
                                                            if(($cate)==('perfume')){
                                                                echo  "selected";
                                                            } ?>>Perfume</option>
                            <option value="handbags" <?php
                                                            if(($cate)==('handbags')){
                                                                echo  "selected";
                                                            } ?>>Hand Bags </option>
                             
                            
                        </select>
                    </div>
                        <input type="text" name="search_text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btnStyle" name="sub" type="submit" onclick="window.location.href='shop.php'">Search</button> 
                        </div>
                    </div>
                        
                    </form>
                </div>
             
                <ul class="navbar-nav cols-sm-1 offset-1 ">
                    <li class="nav-item">
                        <a href="myaccount.php#favourite" class="nav-link" title="Favourites" style="font-size: 1.5rem; color: #345B63;"><span class="fa fa-heart " ></span></a>
                    </li>
                    <li class="nav-item ml-sm-3">
                        <a href="myaccount.php#cart" class="nav-link" title="Shopping Cart" style="font-size: 1.5rem; color: #345B63;"><span class="fa fa-shopping-cart "></span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="compare.php" title="compare" class="nav-link"><img src="images/compare-grey.png"></a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-inverse navbar-expand-sm p-0 m-0 categories" style="background-color: #345B63;">
            <ul class="navbar-nav justify-content-around w-100">
                <li class="nav-item"><a href="<?php echo 'shop.php?category=clothes';?>" class="nav-link">Clothes</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=perfume';?>" class="nav-link">Perfume</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=shoes';?>" class="nav-link">Shoes</a></li>
                <li class="nav-item"><a href="<?php echo 'shop.php?category=handbags';?>" class="nav-link">Hand Bags </a></li>
                
               
            </ul>

        </nav>
        
    </header>
<script type="text/javascript">
    var path = window.location.pathname;
    var page = path.split("/").pop();
    console.log(page)
    pageName = page.split(".");
    console.log('dgdg')

    const home = document.getElementById('index');
    console.log(pageName)

    if (pageName[0]=='index' || page==''){
        console.log(home.innerText);
        home.innerText = '';
    }

</script>

