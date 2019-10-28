<?php
//https://eusebius.developpez.com/php5dom/#L3.3

// instanciation de DomDocument
  $dom = new DomDocument;
// chargement du fichier xml 
  $dom->load("layout_etoile_exported.xml");

// liste des catégories
  $listeActionMap = $dom->getElementsByTagName("actionmap");


// pour chaque donnée de la lisye des catégories
  foreach($listeActionMap as $actionMap)
  {
      // 
   /* echo '<strong>' . $actionMap->nodeValue . '</strong>';*/
      
      // Liste des actions
  $listeAction = $actionMap->getElementsByTagName("action");

    if ($actionMap->hasAttribute("name")) 
    {
         
        // On affiche l'attribut name d'actionMap
    	echo  '<strong>' . $actionMap->getAttribute("name"). '</strong>';
        echo "<br />";  
        
        foreach($listeAction as $action)
          {
            // Liste des reaffectations des touches
            $listeRebind = $action->getElementsByTagName("rebind");
            if ($action->hasAttribute("name")) 
            {
                
                echo  " -La fonction: " . $action->getAttribute("name");
                                       
            echo "<br />";
            }
          }
    }
    echo "<br />";
  }
?> 