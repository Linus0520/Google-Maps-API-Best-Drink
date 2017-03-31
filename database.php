<?php

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$db = new PDO('mysql:host=db674484383.db.1and1.com; dbname=db674484383; charset=utf8', 'dbo674484383', 'Woaixiaotu520@@');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "SELECT * FROM bar";

    $result = $db->query($sql);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);

header("Content-type: text/xml");

  foreach ($data as $row) {
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("best", $row['best']);
  $newnode->setAttribute("path", $row['path']);
  $newnode->setAttribute("recipe", $row['recipe']);
}
   
echo $dom->saveXML();

?>
