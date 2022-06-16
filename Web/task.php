<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>

<Course>
  <name> Webtech </name>
  <code> CSC 3215</code>
  <grade> F </grade>
  <facultyname> Kazi Sadia </facultyname>
</Course>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
echo "<br>";
echo "My course name" .$xml->name."<br>";
echo "My course code " .$xml->code."<br>";
echo "My grade is" .$xml->grade."<br>";
echo "My faculty name" .$xml->facultyname."<br>";


?>