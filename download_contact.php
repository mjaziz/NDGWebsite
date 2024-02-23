<?php
// Contact information
$contactInfo = "Name & Design By Galaxy\n";
$contactInfo .= "58 47th Street, Booth 30, New York, NY\n";
$contactInfo .= "Call or WhatsApp: 646-464-1935\n";
$contactInfo .= "Email: namedesigngalaxy@gmail.com\n";
$contactInfo .= "All items are available in 10k gold, 14k gold & silver.\n";

// Set headers for file download
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="contact_info.txt"');
header('Content-Type: text/plain');
header('Content-Length: ' . strlen($contactInfo));
header('Content-Disposition: inline; filename="contact_info.txt"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

// Send contact info as file
echo $contactInfo;
?>
