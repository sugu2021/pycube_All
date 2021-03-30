<?php
if (isset($_GET['id']) && isset($_GET['filename'])) {
    $roi_id = $_GET['id'];
    $filename = base64_decode($_GET['filename']);
    require_once __DIR__ . '/plugins/vendor/autoload.php';
    if (!file_exists('roi')) {
        mkdir('roi', 0777);
    }
    
    $url = "https://www.pycube.com/roi_template.php?id=" . $roi_id;
	
	$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    $mpdf = new mPDF();
    ob_start();
    $html = file_get_contents($url, false, stream_context_create($arrContextOptions));
    ob_end_clean();
	
    
    $filename = "roi_files/".$filename;
// Here convert the encode for UTF-8, if you prefer 
// the ISO-8859-1 just change for $mpdf->WriteHTML($html);
    $mpdf->WriteHTML(utf8_encode($html));
// Then, you can send PDF to the browser
    $mpdf->Output($filename, 'F');
	
}
?>