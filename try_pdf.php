<?php

require 'C:\xampp\php\PEAR\pdfcrowd.php';

$client = new pdfcrowd('username','apikey');

$pdf = $client->convertURI('https://pdfcrowd.com/blog/convert-html-to-pdf-in-php/');

// convertUrlToFile('https://pdfcrowd.com/blog/convert-html-to-pdf-in-php/','try.pdf');

echo $pdf;

?>