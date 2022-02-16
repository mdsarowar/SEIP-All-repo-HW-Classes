<?php include 'pages/includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)){ ?>
                            <h2 class="text-success text-center"><?php echo $message ?></h2>
                        <?php } ?>
                        <div>
                            <form action="action.php" method="post" enctype="multipart/form-data">
<!--                                <div class="form-group row">-->
<!--                                    <label for="" class="col-md-4 col-form-label">Student Name</label>-->
<!--                                    <div class="col-md-8">-->
<!--                                        <input type="text" name="name" class="form-control"/>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control"/>
                                    </div>
                                </div>
<!--                                <div class="form-group row">-->
<!--                                    <label for="" class="col-md-4 col-form-label">image</label>-->
<!--                                    <div class="col-md-8">-->
<!--                                        <input type="file" name="image" accept="image/*" />-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row">
                                    <label for="" class="col-md-4 "></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="loginbtn" class="btn btn-outline-success btn btn-block" value="lOGIN"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<?php include 'pages/includes/footer.php'?>
