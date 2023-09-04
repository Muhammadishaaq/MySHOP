 <?php 
include 'header.php';
?>
<link rel="stylesheet" href="css/home.css">

<section>
<div id="demo" class="carousel slide" data-ride="carousel">
    <?php
        $category="banner";
        $q=mysqli_query($conn,"select * from banner") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($q);
    ?>
  <!-- Indicators -->
    <ul class="carousel-indicators">
    <?php if(!empty($q['image1'])){?>
            <li data-target="#demo" data-slide-to="0" class="active"></li>
        <?php } ?>
        <?php if(!empty($q['image2'])){?>
            <li data-target="#demo" data-slide-to="1"></li>
        <?php } ?>
        <?php if(!empty($q['image3'])){?>
            <li data-target="#demo" data-slide-to="2"></li>
        <?php } ?>
        <?php if(!empty($q['image4'])){?>
            <li data-target="#demo" data-slide-to="3"></li>
        <?php } ?>
    </ul>
  
    <!-- The slideshow -->

    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 80vh;" src="<?php echo "images/".$category."/".$q['image1'];?>" alt="OnlineShop">
    </div>
    <?php if(!empty($q['image2'])){?>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 80vh" src="<?php echo "images/".$category."/".$q['image2'];?>" alt="OnlineShop">
    </div>
    <?php } ?>
    <?php if(!empty($q['image3'])){?>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 80vh" src="<?php echo "images/".$category."/".$q['image3'];?>" alt="OnlineShop">
    </div>
    <?php } ?>
    <?php if(!empty($q['image4'])){?>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 80vh" src="<?php echo "images/".$category."/".$q['image4'];?>" alt="OnlineShop">
    </div>
    <?php } ?>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>


<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Clothes</h4>
    <div id="demo1l" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='clothes'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                    $qu=mysqli_query($conn,"select * from productdetails where category='clothes'  order by id desc  limit 5,5");

                    while($q=mysqli_fetch_assoc($qu)){
                 ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
           
        </div>
        <a class="carousel-control-prev" href="#demo1l" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1l" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Perfume</h4>
    <div id="demo1m" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='perfume'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                $qu=mysqli_query($conn,"select * from productdetails where category='perfume'  order by id desc  limit 5,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
           
        </div>
        <a class="carousel-control-prev" href="#demo1m" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1m" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>
<section class="m-3">
    <h4 class="mb-2">Latest Shoes</h4>
    <div id="demo1c" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                <?php
                $qu=mysqli_query($conn,"select * from productdetails where category='shoes'  order by id desc  limit 0,5");

                while($q=mysqli_fetch_assoc($qu)){
                ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <div class="card-title-outer">
                                <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                                </p>
                                <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                                
                            </div>
                            <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            
                            <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card-deck">
                <?php 
                $cu=mysqli_query($conn,"select count(*) as count from productdetails where category='shoes'");
                $count=mysqli_fetch_assoc($cu)['count'];
                
                $qu=mysqli_query($conn,"select * from productdetails where category='shoes'  order by id desc  limit 5,5");

                while($q=mysqli_fetch_assoc($qu)){
            ?>
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                        </div>
                        <div class="card-body pt-2">
                            <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                            <h5 class="card-title p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                            <a href="<?php echo 'single-product.php?category=camera&id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#demo1c" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1c" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>
<hr>


<section class="m-3">

<!-- new work -->

<h4 class="mb-2">Latest Hand Bags</h4>
<div id="demo1w" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
            <?php
            $qu=mysqli_query($conn,"select * from productdetails where category='handbags'  order by id desc  limit 0,5");

            while($q=mysqli_fetch_assoc($qu)){
            ?>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                    </div>
                    <div class="card-body pt-2">
                        <div class="card-title-outer">
                            <p class="card-title my-1" title="<?php echo $q['title'];?>"><?php echo $q['title'];?>
                            </p>
                            <span style="background-color:white;color:#49b0c1;position:absolute;bottom:0;right:0;padding-left:10px;">...</span>
                            
                        </div>
                        <h5 class="card-price p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                        
                        <a href="<?php echo 'single-product.php?id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        
        <div class="carousel-item">
            <div class="card-deck">
            <?php 
            $cu=mysqli_query($conn,"select count(*) as count from productdetails where category='handbags'");
            $count=mysqli_fetch_assoc($cu)['count'];
            
            $qu=mysqli_query($conn,"select * from productdetails where category='handbags'  order by id desc  limit 5,5");

            while($q=mysqli_fetch_assoc($qu)){
        ?>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="<?php echo "images/".$q['category']."/".$q['image1'];?>" alt="Card image">
                    </div>
                    <div class="card-body pt-2">
                        <h6 class="card-title my-1"><?php echo $q['title'];?></h6>
                        <h5 class="card-title p-0 m-0 mb-2"> &#8360; <?php echo $q['newPrice'];?> <strike class="text-danger"><small class="text-secondary"> &#8360; <?php echo $q['oldPrice'];?></small></strike> </h5>
                        <a href="<?php echo 'single-product.php?category=handbags&id='.$q['id']; ?>" class="btn btnStyle px-5">View</a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#demo1w" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo1w" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>




<!-- new work -->

</section>
<hr>

<script type="text/javascript">
    

    

</script>

<?php
    include 'footer.php';
?>

