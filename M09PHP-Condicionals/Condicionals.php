<!DOCTYPE html>
<body>
  
</body>

<?php
//Part que s´executa al servidor de PHP
  function CondicionalSimple() {
    //Estic creant una funció simple que executa un condicional.
    echo "Aquí veurem com fer un condicional simple";
    $t = 14;// Recorda que en PHP no es diu de quin tipus de variable es. 

    if ($t <? 20) {
      echo "Aquest missatge surt, si es compleix la condició del condicional";
    }
  }
  function CondicionalSwitch(){
    //Exemple de com estructura un switch en PHP
    $opcio=0;


    switch($opcio){
      case 1:
        //Aqui aniria el codi per la opció 1 de un menú
        break;
      case 2:
        //Aquí aniria el codi per la opció 2 de un menú
        break;
      case 3:
        //Aquí aniria el codi per la opcio 3 de un menú
        break;
      default: 
        break;
    }
    
  }
?>