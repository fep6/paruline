<?php
//https://eusebius.developpez.com/php5dom/#L3.3


  $dom = new DomDocument;
  $dom->load("layout_etoile_exported.xml");

  $listeActionMap = $dom->getElementsByTagName("actionmap");
    
  foreach($listeActionMap as $actionMap)
  {
    echo $actionMap->nodeValue;
    if ($actionMap->hasAttribute("name")) {
    	echo  " - " . $actionMap->getAttribute("name");
    }
    echo "<br />";
  }
?>


<?php
/*  $listePays = $dom->getElementsByTagName("pays");
  foreach($listePays as $pays)
  {
    echo $pays->nodeValue;
    if ($pays->hasAttribute("regime")) {
    	echo  " - " . $pays->getAttribute("regime");
    }
    echo "<br />";
  }*/
?> 