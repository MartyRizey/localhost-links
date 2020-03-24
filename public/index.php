
<?php 
  
  require $_SERVER['DOCUMENT_ROOT'] . '/Linux/code/localhost-links/inc/fileDefinePath.php';

  // constante magique __DIR__
  // print_r(__DIR__); echo '<p></p>';

  // Variable Super Globale $_SERVER
  // echo '<pre>'; 
  // print_r($_SERVER['DOCUMENT_ROOT']);
  // echo'</pre>';

  // Avec le fichier 'index.php' à la racine du projet "liens-localhost" sous Windows via laragon
  // --------------------------------------------------------------------------------------------
  // require __DIR__ . '/views/home.php';
  // require $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/Support_cours/Autres/liens-localhost/views/home.php';  
  
  // Avec le fichier 'index.php' dans un dossier "public" sous Windows via Laragon
  // ------------------------------------------------------------------------------
  // $_SERVER['DOCUMENT_ROOT'] = D:/Logiciels/laragon/www
  // require $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/Support_cours/Autres/liens-localhost/views/home.php';
  // __DIR__ = D:\Logiciels\laragon\www\tutoriels\Support_cours\Autres\liens-localhost\public
  // * require __DIR__ . '\..\views\home.php';
  // à partir d'une constante créée dans le fichier inc/fileDefinePath.php
  // * require VIEWSFOLDER . '/home.php';
  // Chemin relatif à partir de l'endroit ou je me trouve
  // * require '..\views\home.php';

  // Avec le fichier 'index.php' dans un dossier "public" sous LINUX.
  // ----------------------------------------------------------------
  // sous Linux seul le slash ' / ' est fonctionnel.
  // $_SERVER['DOCUMENT_ROOT'] = /var/www/html
  require $_SERVER['DOCUMENT_ROOT'] . '/Linux/code/localhost-links/views/home.php';
  // __DIR__ = /var/www/html/Linux/code/localhost-links/public 
  require __DIR__ . '/../views/home.php';
  // à partir d'une constante créée dans le fichier inc/fileDefinePath.php
  require VIEWSFOLDER . '/home.php';
  // Chemin relatif à partir de l'endroit ou je me trouve
  require '../views/home.php';
  
?>
   
    
   
   