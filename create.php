<?php
$xml = new domdocument();
$xml->load("students.xml");

$sn = $_REQUEST["sNo"];
$fn = $_REQUEST["firstName"];
$ln = $_REQUEST["lastName"];

$student = $xml->createElement("student");
$firstName = $xml->createElement("firstName", $fn);
$lastName = $xml->createElement("lastName", $ln);

$student->appendChild($firstName);
$student->appendChild($lastName);
$student->setAttribute("sNo", $sn);

$xml->getElementsByTagName("students")[0]->appendChild($student);
$xml->save("students.xml");
?>
Added!
<a href="./">Go Back</a>