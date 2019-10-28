<?php
//https://eusebius.developpez.com/php5dom/#L3.3

// instanciation de DomDocument
  $dom = new DomDocument;
// chargement du fichier xml 
  $dom->load("layout_etoile_exported.xml");

// liste des catégories
  $listeActionMap = $dom->getElementsByTagName("actionmap");
// Liste des actions
  $listeAction = $dom->getElementsByTagName("action");
// Liste des input
  $listeRebind = $dom->getElementsByTagName("rebind");

// pour chaque donnée de la lisye des catégories
  foreach($listeActionMap as $actionMap)
  {
      // 
    echo '<strong>' . $actionMap->nodeValue . '</strong>';
      
    if ($actionMap->hasAttribute("name")) {
    	echo  " - " . $actionMap->getAttribute("name");
        echo "<br />";  
        
        
        foreach($listeAction as $action)
          {
            echo $action->nodeValue;
            if ($action->hasAttribute("name")) {
                echo  " - " . $action->getAttribute("name");
                
                
                foreach($listeRebind as $rebind)
                  {
                    echo $rebind->nodeValue;
                    if ($action->hasAttribute("input")) {
                        echo  " - " . $action->getAttribute("input");
                    }
                    echo "<br />";
                  }
                
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