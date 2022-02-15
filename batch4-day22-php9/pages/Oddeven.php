<?php include "pages/includes/header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-capitalize">Odd Even Number</h3>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row" >
                                    <label for="" class="col-md-4 col-form-label">Input a Number </label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="check">
                                    </div>
                                </div>
<!--                                <div class="form-group row">-->
<!--                                    <label for="" class="col-md-4 col-form-label" >Last Number</label>-->
<!--                                    <div class="col-md-8">-->
<!--                                        <input type="number" class="form-control" name="last_number">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row">-->
<!--                                    <label for="" class="col-md-4 col-form-label" >optins</label>-->
<!--                                    <div class="col-md-8">-->
<!--                                        <label for=""><input type="radio"  value="+" name="option">add</label>-->
<!--                                        <label for=""><input type="radio"  value="-" name="option">sub</label>-->
<!--                                        <label for=""><input type="radio"  value="*" name="option">mul</label>-->
<!--                                        <label for=""><input type="radio" value="/" name="option">div</label>-->
<!--                                        <label for=""><input type="radio"  value="%" name="option">mod</label>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label" >Result</label>
                                    <div class="col-md-8">
                                        <input type="text" readonly class="form-control" value="<?php echo isset($result)?$result:''?>">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="submit" name="btn1" class="btn-outline-success btn btn-block" value="show result">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php';?>

