<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
?>
<!doctype html>
<html lang="en">
<?php include_once(ELEMENT.'head.php');?>
<body>
<?php include_once(ELEMENT.'header.php');?>

<div class="container-fluid">
    <div class="row">
        <?php include_once(ELEMENT.'nav.php');?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            ##MAIN_CONTENT##
        </main>
    </div>
</div>

<?php include_once(ELEMENT.'scripts.php');?>
</body>
</html>