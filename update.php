<?php
$xml = new domdocument();
$xml->load("students.xml");

$sn = $_REQUEST["sNo"];
$fn = $_REQUEST["firstName"];
$ln = $_REQUEST["lastName"];

$students = $xml->getElementsByTagName("student");

foreach($students as $student) {
    if($sn === $student->getAttribute("sNo")) {
    $newStudent = $xml->createElement("student");
    $firstName = $xml->createElement("firstName", $fn);
    $lastName = $xml->createElement("lastName", $ln);

    $newStudent->appendChild($firstName);
    $newStudent->appendChild($lastName);
    $newStudent->setAttribute("sNo", $sn);

    $xml->getElementsByTagName("students")[0]->replaceChild($newStudent, $student);
    $xml->save("students.xml");
    break;
    }
}

?>
Updated!
<a href="./">Go Back</a>