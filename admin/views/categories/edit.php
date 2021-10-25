
<?php
include_once($_SERVER["DOCUMENT_ROOT"]."../phpcrud/bootstrap.php");
//selection query
$id = $_GET['id'];
$query = 'SELECT * FROM categories WHERE id = :id';
$sth = $conn->prepare($query);
$sth->bindParam(':id',$id);
$sth->execute();

$category = $sth->fetch(PDO::FETCH_ASSOC);

?>

<?php
ob_start();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



    <form id="category-entry-form" method="post"
          action="update.php"
          role="form">
        <div class="messages"></div>
        <h1>Edit Category</h1>
        <div class="controls">

            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="category_id">category_id</label>-->
            <!--                                <input id="category_id"  value="" type="text" name="category_id" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="label_id">label_id</label>-->
            <!--                                <input id="label_id"  value="" type="text" name="label_id" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="name">Enter Category Name</label>
                    <input id="name"
                           value="<?php echo $category['name']?>"
                           type="text"
                           name="name"
                           placeholder="e.g. Men "
                           autofocus="autofocus"
                           class="form-control">
                    <div class="help-block text-muted">Enter Category Name</div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="link">Enter Category Link</label>
                    <input id="link"
                           value="<?php echo $category['link']?>"
                           type="text"
                           name="link"
                           placeholder=" "
                           autofocus="autofocus"
                           class="form-control">
                    <div class="help-block text-muted">Enter Category Link</div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>


            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="short_description">short_description</label>-->
            <!--                                <input id="short_description"  value="" type="text" name="short_description" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="description">description</label>-->
            <!--                                <input id="description"  value="" type="text" name="description" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="total_sales">total_sales</label>-->
            <!--                                <input id="total_sales"  value="" type="text" name="total_sales" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="product_type">product_type</label>-->
            <!--                                <input id="product_type"  value="" type="text" name="product_type" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="is_new">is_new</label>-->
            <!--                                <input id="is_new"  value="" type="text" name="is_new" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="cost">cost</label>-->
            <!--                                <input id="cost"  value="" type="text" name="cost" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->

            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="special_price">special_price</label>-->
            <!--                                <input id="special_price"  value="" type="text" name="special_price" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="soft_delete">soft_delete</label>-->
            <!--                                <input id="soft_delete"  value="" type="text" name="soft_delete" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <label for="is_draft">is_draft</label>-->
            <!--                                <input id="is_draft"  value="" type="text" name="is_draft" class="form-control">-->
            <!--                                <div class="help-block with-errors"></div>-->
            <!--                            </div>-->
            <!--                        </div>-->



            <button type="submit" class="btn btn-success">
                Send & Save Category
            </button>


        </div>

    </form>
</main>
<?php
$pagecontent = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$pagecontent,$layout);
?>
