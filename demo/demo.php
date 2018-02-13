<?php
	require '../WordCompletion.php';
	
	if (isset($_POST['input_text']) and isset($_POST['source']))
	{
		$typed = $_POST['input_text'];
		$filename = $_POST['source'];
		
		#ini_set('memory_limit', '-1');
		$wc = new WordCompletion($filename);
		$wc->doCompletion($typed);

		header("Content-Type: Application/json");
		echo json_encode($wc->suggestions);
	}
 ?>
