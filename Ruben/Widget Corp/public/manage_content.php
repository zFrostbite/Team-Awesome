<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/included_functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php
	if (isset($_GET["subject"])) {
		$selected_subject_id = $_GET["subject"];
		$selected_page_id = null;
	} elseif (isset($_GET["page"])) {
		$selected_subject_id = null;
		$selected_page_id = $_GET["page"];
	} else {
		$selected_subject_id = null;
		$selected_page_id = null;
	}

?>
<div id="main">
  <div id="navigation">
		<?php echo navigation($selected_subject_id, $selected_page_id); ?>
  </div>
  <div id="page">
    <h2>Manage Content</h2>
    <?php if($selected_subject_id) { ?>
    <?php	$current_subject 	= find_subject_by_id($selected_subject_id); 
    ?>
    	Menu name:<?php echo $current_subject["menu_name"]; ?><br />
    <?php }elseif($selected_page_id) { ?>
    	  <?php $current_page	= find_page_by_id($selected_page_id); ?>
    	Page name:<?php echo $current_page["menu_name"]; ?>
    <?php } else {?>
    	Select a subject or a page.
    <?php }?>

		
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>