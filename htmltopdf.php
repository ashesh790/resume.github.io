	<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Welcome to ExpertPHP.in!</h1>');
$mpdf->Output();
require_once __DIR__ . '/vendor/autoload.php';

$url="http://expertphp.in/index.php";
if (ini_get('allow_url_fopen')) {
    $html = file_get_contents($url);

} else {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $html = curl_exec($ch);
    curl_close($ch);
}
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullwidth');

$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
$mpdf->setBasePath($url);
$mpdf->WriteHTML($html);

$mpdf->Output('download.pdf','D'); 
?> 	