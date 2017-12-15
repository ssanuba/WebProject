<?php



  $lines = file("test.txt");

  
  $xmldoc = new DOMDocument();
  $books_tag = $xmldoc->createElement("category");
  $xmldoc->appendChild($books_tag);


  foreach ($lines as $value) {
    $name= $xmldoc->createElement("title");
    $name->appendChild($xmldoc->createTextNode($value));
    $books_tag->appendChild($name);
  }

  header("Content-type: text/xml");
  print $xmldoc->saveXML();
  


?>