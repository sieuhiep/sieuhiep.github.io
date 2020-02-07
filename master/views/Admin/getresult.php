<?php
	require_once("dbcontroller.php");
	require_once("pagination.class.php");
	$db_handle = new DBController();
	$perPage = new PerPage();

	$sql = "SELECT * from tblsanpham";
	$paginationlink = "index.php?mod=Admin&act=test&page=";	
	$pagination_setting = $_GET["pagination_setting"];
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;
	
	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	$faq = $db_handle->runQuery($query);

	if(empty($_GET["rowcount"])) {
	$_GET["rowcount"] = $db_handle->numRows($sql);
	}

	if($pagination_setting == "Trước-Sau") {
		$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
	} else {
		$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
	}


	$output = '';
	print_r($faq);
	foreach($faq as $k=>$v) {
	  $output .= '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" />' . $faq[$k]["id"] . '</div>';
	  $output .= '<div class="answer">' . $faq[$k]["mahang"] . '</div>';
	 }
	if(!empty($perpageresult)) {
	$output .= '<div id="pagination">' . $perpageresult . '</div>';
	}
	print $output;
?>
