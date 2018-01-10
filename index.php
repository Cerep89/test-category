<?php include "include/header.php";?>

<div class="row">
    <div class="container">
        <div class="col-sm-12 col-md-12">

            <div class="text-right">
             <!--======================================
             Add language button
             =======================================-->
                <button type="button" class="btn btn-primary"><a href="?lang=en">EN</a></button>
                <button type="button" class="btn btn-primary"><a href="?lang=ro">RO</a></button>

            </div>
            <div class="text-center"
              <!--======================================
              Add button
              =======================================-->
                <button type="button" class="btn btn-primary">Category</button>
                <button type="button" class="btn btn-primary">Cart</button>
                <div class="center"><h1><?=$lang->get("CATEGORIES")?> </h1></div>
            </div>
            <!--=========================================
                                  Container for category
             ============================================-->

<div class="row">
    <div class="container text-center image-container ">
        <?php foreach ($categories as $category): ?>
        <div class="col-xs-12 col-sm-8 col-md-4">
            <div class="image img-principal"><img src="image/01.jpg" alt="" ></div>

            <h3><a href=""><?= $category[0];?></a></h3>
        </div>

        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</div>




<?php include "include/footer.php";?>

