<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EquipsController extends AbstractController
{
   private $equips = array(
       array("codi" => "1", "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => array("David", "Alejandro", "Jose", "Marta")),
       array("codi" => "2", "nom" => "Equip Groc", "cicle" => "DAM", "curs" => "21/22", "membres" => array("Alvaro", "Ivan", "Marcos", "Samuel")),
       array("codi" => "3", "nom" => "Equip Taronja", "cicle" => "ASIX", "curs" => "19/20", "membres" => array("Sergio", "Laura", "Maria", "Sue")),
       array("codi" => "4", "nom" => "Equip Verd", "cicle" => "REDES", "curs" => "18/19", "membres" => array("Yasmine", "Valentino", "Mario", "Samantha")),
   );


   #[Route('/equip/{codi<\d+>?1}',name:'dades_equip')]
    public function dades($codi){
       $resultat = array_filter(
           $this->equips,
           function ($dades) use ($codi) {
               return $dades["codi"]==$codi;
           }
       );


       if(count($resultat)>0){
           return $this->render('dades_equip.html.twig', array('dades' => array_shift($resultat)));
       }else{
           return $this->render('dades_equip.html.twig', array('dades' => array_shift($resultat)));
       }
    }

}


?>