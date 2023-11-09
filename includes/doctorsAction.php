<?php

require_once './../includes/action.php';

class doctorsAction extends  DataOperation 
{
    
  public function fetchDoctors()  
  {
    return $this->fetch_record('doctors');
  }
}

///docs object
$doctorsAction = new doctorsAction();

$doctorsAction->fetchDoctors();


