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
<body style="margin:0;">
  <!--jQuery-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

  <!--docviewer.js-->
  <script src="//static-v2.crocodoc.com/core/docviewer.js"></script>

  <!--sets a global variable "_doc" that is needed for initialization-->
  <script src="//crocodoc.com/webservice/document.js?session=<?php echo $sessionKey ?>"></script>

  <!--div for viewer-->
  <div id="DocViewer"></div>

  <script type="text/javascript">
    //creates a document viewer using the "DocViewer" div
    var docviewer = new DocViewer({ "id": "DocViewer" });
  </script>
</body>
