<?php
/*
 * MODULE DE PHP
 * Index du site
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');

//verification de la page appelante
$adresseDeLaPageAppelante=$_SERVER['HTTP_REFERER'];
$pageAppelante=basename($adresseDeLaPageAppelante);


//vérification de la page demandée 

if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
  { 
    $page = "404"; //page demandée inexistante
  }
}elseif($pageAppelante=='masession.php')
{
	$page="newfilm";
	//appel du controller qui traite les données du nouveau film entrées par l'utilisateur
	require_once(PATH_CONTROLLERS.$page.'.php'); 
}
else{
	$page="accueil"; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php'); 
}
?>
