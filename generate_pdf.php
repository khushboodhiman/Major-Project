<?php

require_once __DIR__ . '/vendor/autoload.php';

$reg = $_POST['reg'];

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('


	');

$mpdf->Output($reg.'.pdf','D');

?>