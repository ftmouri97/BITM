<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "../phpcrud/bootstrap.php");
//selection query
$query = "SELECT * FROM categories ORDER BY id ASC ";
$sth = $conn->prepare($query);
$sth->execute();
$categories = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
ob_start();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 >Category</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar"></span>
                | <a href="<?=VIEW;?>categories/create.php" style="color: black">Add New</a>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                    <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($categories){
                        foreach($categories as $category){
                            ?>
                            <tr class="text-center">
                                <td class="category-sl">&nbsp;</td>

                                <td class="category-name">
                                    <h3><a href="show.php?id=<?php echo $category['id'] ?>"><?php echo $category['name'];?></a></h3>

                                </td>
                                <td class="category-name">
                                    <h3><a href="show.php?id=<?php echo $category['id'] ?>"><?php echo $category['link'];?></a></h3>

                                </td>

                                <td> <a href="<?=VIEW?>categories/edit.php?id=<?php echo $category['id']?>">Edit</a>
                                    | <a href="<?=VIEW?>categories/delete.php?id=<?php echo $category['id']?>">Delete</a></td>
                            </tr>
                        <?php }}else{
                        ?>
                        <tr class="text-center">
                            <td colspan="5">
                                There is no category available. <a href="create.php">Click Here</a> to add a category.
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</main>
<?php
$pagecontent = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$pagecontent,$layout);
?>


