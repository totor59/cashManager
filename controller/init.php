<?php
// On enregistre notre autoload.
 function chargerClasse($classname) {
   require '../model/'.$classname.'.php';
   }
   spl_autoload_register('chargerClasse');
   $db = new PDO('mysql:host=$$$$$$$$;dbname=$$$$$$$$$$$', '$$$$$$$$$', '$$$$$$$$$$');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
   $manager = new CompteManager($db);
