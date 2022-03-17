<?php $this->view("catalog/header", $data); ?>

Video

<?php $this->view("catalog/footer", $data); ?>

<script src="<?=ASSETS?>catalog/js/plugins.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>