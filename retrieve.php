<?php
$xml = new domdocument();
$xml->load("students.xml");

$students = $xml->getElementsByTagName("student");

foreach($students as $student) {
    $sn = $student->getAttribute("sNo");
    $fn = $student->getElementsByTagName("firstName")[0]->nodeValue;
    $ln = $student->getElementsByTagName("lastName")[0]->nodeValue;

    echo "<b>Student No.: </b>$sn<br>";
    echo "<b>Full Name: </b>$fn $ln<br><br>";
}

?>