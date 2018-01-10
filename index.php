<?php include "include/header.php";?>


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

