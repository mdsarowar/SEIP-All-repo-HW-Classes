<?php include 'pages/includes/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($student as $students){ ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $students['image']; ?>" alt="" class="card-img-top" style="height: 250px">
                        <div class="card-body">
                            <h2><?php echo $students['name']; ?></h2>
                            <p><?php echo $students['email']; ?></p>
                            <p><?php echo $students['phone']; ?></p>
                            <a href="javascript:void (0)" class="btn btn-outline-success float-right">View</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php'?>
