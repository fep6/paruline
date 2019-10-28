<?php
//https://eusebius.developpez.com/php5dom/#L3.3


  $dom = new DomDocument;
  $dom->load("layout_etoile_exported.xml");

  $listeActionMap = $dom->getElementsByTagName("actionmap");
  $listeAction = $dom->getElementsByTagName("action");


  foreach($listeActionMap as $actionMap)
  {
      
    echo '<strong>' . $actionMap->nodeValue . '</strong>';
      
    if ($actionMap->hasAttribute("name")) {
    	echo  " - " . $actionMap->getAttribute("name");
        echo "<br />";  
        
        
        foreach($listeAction as $action)
          {
            echo $action->nodeValue;
            if ($action->hasAttribute("name")) {
                echo  " - " . $action->getAttribute("name");
            }
            echo "<br />";
          }
        
        
        
        
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