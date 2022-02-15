<?php include 'pages/includes/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($newses as $news) { ?>
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="<?php echo $news['image']?>" alt="" class="card-img-top" style="height: 300px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"> <?php echo $news['Titel']?></h3>
                            <p class="text-justify"> <?php echo $news['description']?></p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php'?>