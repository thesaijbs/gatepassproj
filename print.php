<?php
require 'vendor/autoload.php'; // Include the ESC/POS library

use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\Printer;

$sno = $_GET['sno'];

$connector = new NetworkPrintConnector("YourPrinterName", 9100);
$printer = new Printer($connector);

// Fetch details from the database based on $sno and format the text accordingly
$text = "Details to print for sno: $sno";

// Print the text
$printer->text($text);

// Cut the paper
$printer->cut();

// Close the printer
$printer->close();
?>
