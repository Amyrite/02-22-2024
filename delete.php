<?php
$xml = new domdocument();
$xml->load("students.xml");

$sn = $_REQUEST["sNo"];

$students = $xml->getElementsByTagName("student");

foreach($students as $student) {
    if($sn === $student->getAttribute("sNo")) {
    $xml->getElementsByTagName("students")[0]->removeChild($student);
    $xml->save("students.xml");
    break;
    }
}

?>
Deleted!
<a href="./">Go Back</a>