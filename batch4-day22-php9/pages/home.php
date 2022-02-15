<?php include "pages/includes/header.php";?>
<!--        <section class="py-5">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-8 mx-auto">-->
<!--                     <div class="card card-body">-->
<!--                         <form action="action.php" method="post">-->
<!--                             <div class="form-group row">-->
<!--                                 <label for="" class="col-md-4 col-form-label">Input word</label>-->
<!--                                 <div class="col-md-8">-->
<!--                                     <input type="text" name="input_value" class="form-control">-->
<!--                                 </div>-->
<!--                             </div>-->
<!--                             <div class="form-group row">-->
<!--                                 <label for="" class="col-md-4 col-form-label">select type</label>-->
<!--                                 <div class="col-md-8">-->
<!--                                     <label for=""><input type="radio" name="type" value="word">word count</label>-->
<!--                                     <label for=""><input type="radio" name="type" value="character">Character count</label>-->
<!---->
<!--                                 </div>-->
<!--                             </div>-->
<!--                             <div class="form-group row">-->
<!--                                 <label for="" class="col-md-4 col-form-label">result</label>-->
<!--                                 <div class="col-md-8">-->
<!--                                     <textarea class="form-control"readonly name="" id="" cols="30" rows="10">-->
<!--                                         --><?php //echo "$givenWord\n$wordCount\n$characterCount";?>
<!--                                     </textarea>-->
<!--                                 </div>-->
<!--                             </div>-->
<!--                             <div class="form-group row">-->
<!--                                 <label for="" class="col-md-4 col-form-label"></label>-->
<!--                                 <div class="col-md-8">-->
<!--                                     <input type="submit" name="btn" class="btn btn-outline-success btn-block " value="get result">-->
<!--                                 </div>-->
<!--                             </div>-->
<!--                         </form>-->
<!--                     </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--<siction class="py-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-10 mx-auto">-->
<!--                <div class="card">-->
<!--                    <div class="card-header">-->
<!--                        <h2>Series</h2>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <form action="action.php" method="post">-->
<!--                            <div class="form-group row">-->
<!--                                <label for="" class="col-md-4 col-form-label">starting number</label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <input type="number" name="starting_number" class="form-control">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="" class="col-md-4 col-form-label">Ending Number</label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <input type="number" name="ending_number" class="form-control">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="" class="col-md-4 col-form-label">select type</label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <label for=""><input type="radio" name="type" value="asc">low to heigh</label>-->
<!--                                    <label for=""><input type="radio" name="type" value="dsc">heigh to low</label>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="" class="col-md-4 col-form-label">Result </label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <textarea class="form-control"  rows="5">-->
<!--                                        --><?php //echo isset($result)?$result:'';?>
<!--                                    </textarea>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <div class="col-md-12">-->
<!--                                    <input type="submit" name="btn" value="check Rwsult" class="btn btn-outline-success btn btn-block">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</siction>-->


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-capitalize">calculator</h3>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row" >
                                    <label for="" class="col-md-4 col-form-label">First number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="first_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label" >Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="last_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label" >optins</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio"  value="+" name="option">add</label>
                                        <label for=""><input type="radio"  value="-" name="option">sub</label>
                                        <label for=""><input type="radio"  value="*" name="option">mul</label>
                                        <label for=""><input type="radio" value="/" name="option">div</label>
                                        <label for=""><input type="radio"  value="%" name="option">mod</label>
                                    </div>
                                </div>
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
                                    <input type="submit" name="btn" class="btn-outline-success btn-block" value="show result">
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
