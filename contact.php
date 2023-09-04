<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">


  
    <section class=" card-deck mx-0 mb-5 mt-4 justify-content-between">
        <div class="card shadow email">
            <div class="card-head text-center"><i class="fa fa-envelope icon"></i></div><hr>    
            <div class="card-body">mianpukhtookhan94@gmail.com</div>
        </div>
        <div class="card shadow phone text-center">
            <div class="card-head"><i class="fa fa-phone icon"></i></div>  <hr>
            <div class="card-body">+92 3061982062</div>
        </div>
        <div class="card shadow address">
            <div class="card-head text-center"><i class="fa fa-home icon"></i></div>  <hr>
            <div class="card-body">Tipu Sultan Road Saddar Peshawar</div>
        </div>
    
    </section>
    <hr>

    <section class="my-4">
        
        <div class="container justify-content-center">
        <div class="row mx-5">
        <div class="col-md-12">
        <h2 class="text-secondary bg-light text-center py-2 mb-3">Message Us!</h2>
        <form action="mailto.php"  method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">E-mail Id</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Id">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" class="form-control" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btnStyle  form-control">Submit</button>
            </div>

        </form>
        </div>
        </div></div>
    </section>


<?php include 'footer.php'; ?>