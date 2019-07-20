<div class="row my-2">
    <div class="col">
        <div class="p-3 bg-light rounded">
            
            <h5>Import RSS/XML feed</h5>

            <form action="app/import_rss.php" method="POST">
                <div class="input-group <?php if(isset($_SESSION['rss_failed'])){echo('has-danger');} if(isset($_SESSION['rss_success'])){echo('has-success');} ?>">
                    <input type="text" class="form-control <?php if(isset($_SESSION['rss_failed'])){echo('is-invalid');}if(isset($_SESSION['rss_success'])){echo('is-valid');} ?>" placeholder="import rss/xml url here...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-file-import"></i>&nbsp;&nbsp;Import</button>
                    </div>
                    <?php if(isset($_SESSION['rss_failed'])){echo('<div class="invalid-feedback">The validation has failed.</div>');} ?>
                    <?php if(isset($_SESSION['rss_success'])){echo('<div class="valid-feedback">The validation has passed.</div>');} ?>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
    if(isset($_SESSION['rss_failed'])){
        unset($_SESSION['rss_failed']);
    }
    if(isset($_SESSION['rss_success'])){
        unset($_SESSION['rss_success']);
    }
?>