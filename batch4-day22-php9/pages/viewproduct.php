<?php include 'pages/includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">

                <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="<?php echo $productsall['image']; ?>" alt="" class="card-img-top" style="height: 300px">
                    </div>

                </div>
                <div class="col-md-6 mt-3">

                    <div class=" card card-body" style="min-height: 400px">
                        <h3 class="card-title font-weight-bold"> <?php echo $productsall['name']; ?></h3>
                        <p class="">Price : BDT <?php echo $productsall['price']; ?></p>
                        <p class="text-justify"> <?php echo $productsall['description']; ?></p>
                        <a href="" class="btn btn-outline-success">Order Now</a>

                    </div>
                </div>

        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'?>
