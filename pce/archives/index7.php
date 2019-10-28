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
// Liste des reaffectations des touches
  $listeRebind = $dom->getElementsByTagName("rebind");

// pour chaque donnée de la lisye des catégories
  foreach($listeActionMap as $actionMap)
  {
      // 
   /* echo '<strong>' . $actionMap->nodeValue . '</strong>';*/
      
    if ($actionMap->hasAttribute("name")) {
        
        
    	echo  '<strong>' . $actionMap->getAttribute("name"). '</strong>';
        echo "<br />";  
        
        
        foreach($listeAction as $action)
          {
            
            if ($action->hasAttribute("name")) 
            {
                
                echo  " - " . $action->getAttribute("name");
                                       
        
            echo "<br />";
            }
          }
        
        foreach($listeRebind as $rebind)
          {
            echo $rebind->nodeValue;
            if ($rebind->hasAttribute("input")) {
                echo  " a pour entrée: " . $rebind->getAttribute("input");
            }
            echo "<br />";
          }
        
       
    }
    echo "<br />";
  }
?> 