<?php
  
  $diaDaSemana = 8; //date ("w");

  switch ($diaDaSemana) {
  	case 0:                    //se o resutado for "0"
  	echo 'Domingo';
  	break;
    case 1:                   //Se o resultado for "1"
  	echo 'Segunda';
  	break;
  	case 2:
  	echo 'Terça';
  	break;
  	case 3:
  	echo 'Quarta';
  	break;
    
    default:
    echo "Data invalida";
  	
  }



?>