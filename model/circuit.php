<?php
class Circuit{
	
private $id;
private $nom;
private $image;
private $localisation;
private $distance;
private $grand_prix;
private $longeur;
private $record;
private $description;



public  function __construct($id,$nom,$image,$localisation,$distance,$grand_prix,$longeur,$record,$description)
{
	$this->id=$id;
    $this->nom=$nom;
    $this->image=$image;
    $this->localisation=$localisation;
    $this->distance=$distance;
    $this->grand_prix=$grand_prix;
    $this->longeur=$longeur;
    $this->record=$record;
    $this->description=$description;


}

public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}

public function getimage() {
    return $this->image;
 } 

public function getlocalisation()
{
	return $this->localisation;
}

public function getdistance()
{
	return $this->distance;
}
 
 public function getgrand_prix() {
    return $this->grand_prix;
} 
    
public function getlongeur() {
     return $this->longeur;
}
public function getrecord() {
      return $this->record;
     } 


public function getdescription() {
        return $this->description;
       } 


}




?>