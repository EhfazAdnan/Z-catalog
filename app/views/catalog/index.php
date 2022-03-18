<?php $this->view("catalog/header", $data); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=ASSETS?>catalog/img/hero.jpg">

        <form class="d-flex tm-search-form" method="GET">
            <input name="find" class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>

    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="<?= $data['page_current'] ?>" size="1" class="tm-input-paging tm-text-primary"> of <?= $data['page_total'] ?>
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">



        <?php 
        
        if(is_array($data['images'])){
            foreach($data['images'] as $row){
                $this->view("catalog/single_row_image", $row); 
            }
        }

        
        ?>
            
            
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="<?= $data['page_prev'] ?>" class="btn btn-primary tm-btn-prev mb-2">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="<?= $data['page_1'] ?>" class="active tm-paging-link">1</a>
                    <a href="<?= $data['page_2'] ?>" class="tm-paging-link"><?= ($data['page_current'] + 1) ?></a>
                    <a href="<?= $data['page_3'] ?>" class="tm-paging-link"><?= ($data['page_current'] + 2) ?></a>
                    <a href="<?= $data['page_4'] ?>" class="tm-paging-link"><?= ($data['page_current'] + 3) ?></a>
                </div>
                <a href="<?= $data['page_next'] ?>" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <?php $this->view("catalog/footer"); ?>

    <script src="<?=ASSETS?>catalog/js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>