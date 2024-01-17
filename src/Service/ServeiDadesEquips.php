<?php

namespace App\Service;
class ServeiDadesEquips{
   private $equips = array(
       array("codi" => "1",
           "nom" => "Equipo Rojo",
           "cicle" => "DAW",
           "curs" => "22/23",
           "img" => "luca.jpeg",
           "membres" => array("David", "Alejandro", "Jose", "Marta")),
       array("codi" => "2",
           "nom" => "Equipo Amarillo",
           "cicle" => "DAM",
           "curs" => "19/20",
           "img" => "coco.jpeg",
           "membres" => array("Pepe", "Luis", "Silvia", "Anna")),
       array("codi" => "3",
           "nom" => "Equipo Morado",
           "cicle" => "ASIX",
           "curs" => "20/21",
           "img" => "fumeta.jpeg",
           "membres" => array("Pablo", "Lucas", "Sabrina", "Anastasia")),
       array("codi" => "4",
           "nom" => "Equipo Verde",
           "cicle" => "AMX",
           "curs" => "18/19",
           "img" => "oliver.jpeg",
           "membres" => array("Hernesto", "Hugo", "Alba", "Natalaia")),
   );


   public function get(){
       return $this->equips;
   }
}


?>
