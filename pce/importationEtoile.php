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
      

    if ($actionMap->hasAttribute("name")) 
    {
         
        // On affiche l'attribut name d'actionMap
    	echo  '<strong>' . $actionMap->getAttribute("name"). '</strong>';
        echo "<br />";  
        
        
        // Liste des actions
        $listeAction = $actionMap->getElementsByTagName("action");
        
        foreach($listeAction as $action)
          {

            if ($action->hasAttribute("name")) 
            {
               // Affichage de la fonction 
                echo  " -La fonction: " . $action->getAttribute("name");
                
                // Liste des reaffectations des touches
                $listeRebind = $action->getElementsByTagName("rebind");
                
                foreach($listeRebind as $rebind)
                  {
                    if ($rebind->hasAttribute("input")) 
                    {
                       // Affichage de l'affectation de la fonction 
                        echo  " --> a pour affectation: " . $rebind->getAttribute("input");
                    }
                    
                  }   
                
                
                
            echo "<br />";
            }
          }
    }
    echo "<br />";
  }
?> 