<?php


class carte
{
 private $num;
 private $pts;
 private $identifiant;



 //public function __construct () {}

 public  function __construct($identifiant,$num,$pts) 
    {
     $this->pts=$pts;
     $this->num=$num;
     $this->identifiant=$identifiant;
     }
     
 

 public function getId() {
     return $this->identifiant;
 }

 public  function getNum() {
     return $this->num;
 }

 public function getPts() {
     return $this->pts;
 }

 public function setId($identifiant) {
     $this->identifiant=$identifiant;
 }

 public function setNum($num){
     $this->num=$num;
 }

 public function setPts($pts) {
     $this->pts=$pts;
 }

}
?>