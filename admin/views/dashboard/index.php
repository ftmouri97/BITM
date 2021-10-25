<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/phpcrud/bootstrap.php');
?>

<?php
ob_start();
include_once(DOCROOT.'/admin/views/elements/'.'sectiontitle.php');
include_once(DOCROOT.'/admin/views/elements/'.'graph.php');
include_once(DOCROOT.'/admin/views/elements/'.'samplepageelement.php');
$dashboard = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$dashboard,$layout);
?>