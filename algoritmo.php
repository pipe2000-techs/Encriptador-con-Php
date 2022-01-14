<?php 
  error_reporting(0);

  class algoritmo {

    public $rta;

    //se le da un valor a cada letra del abcdario ecepto (a,e,i,o,u)
    public $abc = array('b' => '6','c' => '8','d' => '0','f' => '¡','g' => '!','h' => '94','j' => '&','k' => '(','l' => ')','m' => '=','n' => ':','ñ' => ';','p' => '+','q' => '[','r' => ']','s' => '77','t' => '1','v' => '/','w' => '11','x' => '22','y' => '33','z' => '44');

    private function encriptar($mensage, $clave){

      $clave = strtolower($clave);// convierte las mayusculas de la clave en minuscaulas

      $mensage = strtolower($mensage);// convierte las mayusculas del mensage en minuscaulas

      $clave= str_split($clave);// convierte la clave en un array

      $mensage = strrev($mensage);// invierte el mensage 

      $rta1 = str_replace('a', '_', $mensage);
      $rta2 = str_replace('e', '#', $rta1);
      $rta3 = str_replace('i', '8-', $rta2);
      $rta4 = str_replace('o', '*@', $rta3);
      $rta5 = str_replace('u', '..', $rta4);
      $rta = str_replace(' ', '%', $rta5);

      
      foreach($this-> abc as $po => $sl){//se llama dotos los balores el array abcdario

        foreach ($clave as $le ) {// se llama todos los caracteres de la contraseña
    
          if($po == $le){// si la contraseña tiene ualgun caracter del abcdario sera cambiado porl el balor que se le dio anteriormente
    
            $rta= str_replace($le, $sl, $rta);
    
          }
    
        }
    
      }

      echo $rta;
      
    }


    private function desencriptar($mensage, $clave){

      $clave = strtolower($clave);// convierte las mayusculas de la clave en minuscaulas

      $mensage = strtolower($mensage);// convierte las mayusculas del mensage en minuscaulas

      $clave= str_split($clave);// convierte la clave en un array

      $mensage = strrev($mensage);// invierte el mensage 

      $rta1 = str_replace('_', 'a', $mensage);//
      $rta2 = str_replace('#', 'e', $rta1);
      $rta3 = str_replace('-8', 'i', $rta2);
      $rta4 = str_replace('@*', 'o', $rta3);
      $rta5 = str_replace('..', 'u', $rta4);
      $rta = str_replace('%', ' ', $rta5);

      foreach($this -> abc as $po => $sl){//se llama dotos los balores el array abcdario

        foreach ($clave as $le ) {// se llama todos los caracteres de la contraseña
    
          if($le == $po){// si la contraseña tiene ualgun caracter del abcdario sera cambiado porl el balor que se le dio anteriormente
    
            $rta= str_replace($sl, $le, $rta);
    
          }
    
        }
    
      }

      echo $rta;

    }


    public function solucion($tarea, $mensage, $clave){

      if($tarea == 'encriptar'){

        self::000($mensage, $clave);

      }elseif($tarea == 'desencriptar'){

        self::desencriptar($mensage, $clave);

      }
    }
  }

  $solucion = new algoritmo();

  $mensage = $_POST['mensage'];

  $clave = $_POST['clave'];

?>