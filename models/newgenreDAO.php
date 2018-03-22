<?php

require_once(PATH_MODELS.'DAO.php');

//retourne un Utilisateur ou nul
class genreDAO extends DAO
{
  public function insertion(){
    require_once(PATH_ENTITY.'genre.php');
    $res = $this->prepare('insert into genre (libelle) values ('.$an.')');
    if($res)
    {
      return new genre($res['id'], $res['libelle']);
    }
    else return null;     
	
  }
  
}