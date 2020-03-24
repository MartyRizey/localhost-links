
<?php 

  require $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/Support_cours/Autres/liens-localhost/inc/fileDefinePath.php';
  
  // constante magique __DIR__
  // print_r(__DIR__);

  // Variable Super Globale $_SERVER
  // echo '<pre>'; 
  // print_r($_SERVER);
  // echo'</pre>';

  // Avec le fichier 'index.php' à la racine du projet "liens-localhost".
  // require __DIR__ . '/views/home.php';
  // require $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/Support_cours/Autres/liens-localhost/views/home.php';  
  
  // Avec le fichier 'index.php' dans un dossier "public" sous Windows via Laragon
  // -----------------------------------------------------------------------------
  // $_SERVER['DOCUMENT_ROOT'] = D:/Logiciels/laragon/www
  require $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/Support_cours/Autres/liens-localhost/views/home.php';
  // __DIR__ = D:\Logiciels\laragon\www\tutoriels\Support_cours\Autres\liens-localhost\public
  require __DIR__ . '\..\views\home.php';
  // 
  require VIEWSFOLDER . '/home.php';
  //
  require '../views/home.php';

?>
   
    
   
   