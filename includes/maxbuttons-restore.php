<?php
if (isset($_GET['id']) && $_GET['id'] != '') {
	$button = new maxButton();
	$button->set($_GET['id']);
	$button->setStatus("publish"); 
}
?>
<script type="text/javascript">
	window.location = "<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=list&status=trash&message=1restore";
</script>
