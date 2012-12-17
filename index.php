<?php
	error_reporting(E_ALL);

	$cengageAPIToken = "AbWKon8RQIMyZPXDxh4t1FsB";
	require_once('crocodoc-php/Crocodoc.php');
	
	//set API Key
	Crocodoc::setApiToken($cengageAPIToken);

	// with a file
	/* $filePath = null;
	$fileHandle = fopen($filePath, 'r');
	$uuid = CrocodocDocument::upload($fileHandle);
	*/

	$url = "http://www.nasa.gov/pdf/588413main_SLS_Fun_Facts.pdf";
	
	//nasa document
	$uuid = "e65ee0a5-bff3-44ab-b0dd-7f077180e190";


	/*try{
		$uuid = CrocodocDocument::upload($url);
		//echo 'success :)' . "\n";
		//echo $uuid;
	} catch (CrocodocException $e) {
		echo 'failed :(' . "\n";
		echo '  Error Code: ' . $e->errorCode . "\n";
		echo '  Error Message: ' . $e->getMessage() . "\n";
	}*/

	

	if($uuid != null) {
		$sessionKey = CrocodocSession::create($uuid);
		$frameUrl = "https://crocodoc.com/view/$sessionKey";
	}

?>
<iframe src="<?php echo $frameUrl ?>" width="800px" height="650px" frameborder="0"></iframe>
