<?php $this->view("catalog/header", $data); ?>

<div style="margin: auto; max-width: 600px; width: 100%; padding: 2em;">
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
           <input type="text" class="form-control" name="title" placeholder="Image Title" required>
        </div>

        <div class="mb-3">
            <input type="file" name="file" required>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>
</div>

<?php $this->view("catalog/footer", $data); ?>

<script src="<?=ASSETS?>catalog/js/plugins.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>