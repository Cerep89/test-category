<?php include "include/header.php";?>

                <h3>Products from category:Category name</h3>


            <!--==========================================
                        Add first container for category
             ============================================-->
<?php
$cat = $_GET['category'];
$category = getCategory($cat);
foreach ($category as $catSelect):?>
<?php var_dump($catSelect);die;?>
        <div class="row">
            <div class="container image-container">
                <!--============================
                    Image left container
                    =============================-->

                <div class="col-md-4">
                    <img src="image/01.jpg" alt="img1"  width="350" height="150">
                </div>
                <!--================================
                   Right container
                   =====================================-->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <h2><?= $category['title_en']?></h2>
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="price">20$
                                <button type="button" class="btn btn-primary">Remove from cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex ipsam magnam
                                minus necessitatibus quis sit vero voluptate voluptatum. A earum eius fugiat
                                incidunt laboriosam praesentium rem repudiandae vitae. Vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
            <!--==========================================
                        Add second container for category
             ============================================-->

            <div class="row">
                <div class="container image-container">
                    <!--============================
                        Image left container
                        =============================-->

                    <div class="col-md-4">
                        <img src="image/02.jpg" alt="img1"  width="350" height="150">
                    </div>
                    <!--================================
                       Right container
                       =====================================-->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Title</h2>
                            </div>
                            <div class="col-md-8 text-right">
                                <div class="price">20$
                                    <button type="button" class="btn btn-primary">Remove from cart</button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex ipsam magnam
                                    minus necessitatibus quis sit vero voluptate voluptatum. A earum eius fugiat
                                    incidunt laboriosam praesentium rem repudiandae vitae. Vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==========================================
                        Add third container for category
             ============================================-->

            <div class="row">
                <div class="container image-container">
                    <!--============================
                        Image left container
                        =============================-->

                    <div class="col-md-4">
                        <img src="image/03.jpg" alt="img1"  width="350" height="150">
                    </div>
                    <!--================================
                       Right container
                       =====================================-->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Title</h2>
                            </div>
                            <div class="col-md-8 text-right">
                                <div class="price">20$
                                    <button type="button" class="btn btn-primary">Remove from cart</button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex ipsam magnam
                                    minus necessitatibus quis sit vero voluptate voluptatum. A earum eius fugiat
                                    incidunt laboriosam praesentium rem repudiandae vitae. Vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>

<?php include "include/footer.php";?>