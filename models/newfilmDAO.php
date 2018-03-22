<?php

require_once(PATH_MODELS.'DAO.php');

class filmDAO extends DAO
{
  public function insertion(){
    require_once(PATH_ENTITY.'film.php');
	
    $res = $this->prepare('insert into film (TITRE, RESUME, NOMFICHIER) values ('.$titre.','.$resum.','.$infosfichier')');
    if($res)
    {
      return new film($res['ID'], $res['TITRE'], $res['RESUME'],$res['NOMFICHIER'],$res['GENID']);
    }
    else return null;     
	
  }
  
}