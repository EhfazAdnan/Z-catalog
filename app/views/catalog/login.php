<?php $this->view("catalog/header", $data); ?>

<div style="margin: auto; max-width: 600px; width: 100%; padding: 2em;">

    <h2 class="col-6 mt-3" tm-text-primary>
        Login
    </h2>

    <form method="post">

        <div class="mb-3">
           <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="password" required>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php $this->view("catalog/footer", $data); ?>

<script src="<?=ASSETS?>catalog/js/plugins.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>