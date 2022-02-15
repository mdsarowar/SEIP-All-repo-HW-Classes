<?php include 'pages/includes/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Series</h4>

                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">firstnumber</label>
                                <div class="col-md-8">
                                    <input type="text" name="firstnumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input word</label>
                                <div class="col-md-8">
                                    <input type="text" name="lastnumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">select type</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="type" value="word">word count</label>
                                    <label for=""><input type="radio" name="type" value="character">Character count</label>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">result</label>
                                <div class="col-md-8">
                                    <!--  <input type="text" value="--><?php //echo isset($result)?$result:''?><!--" readonly  class="form-control">-->
                                    <textarea class="form-control"readonly name="" id="" cols="30" rows="10">
                                         <?php echo "$givenWord\n$wordCount\n$characterCount";?>
                                     </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="series" class="btn btn-outline-success btn-block " value="get result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include 'pages/includes/footer.php';?>
