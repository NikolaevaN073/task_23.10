<?php

interface TransportInterface
{
  public function drive();   
}

class Transport implements TransportInterface
{  
  public function drive() {
    function goForward() {}
    function goBack() {}
  }
  public function specialAbility() {}
}

class Cars extends Transport
{  
  public $interiorTrim = 'fabric';
  public $interiorColor = 'grey';

  public function nitrousOxideOfOzone() {}   
  public function specialAbility() {    
    $this->nitrousOxideOfOzone();
  }
  public function signal() {}
  public function turnOnTheWipers() {}
}

class Tanks extends Transport
{
  public function shoot() {}
}

class SpecialMachines extends Transport 
{
  public function bucketControl () {}
  public function specialAbility() {
    $this->bucketControl();
  }
}

function transportWorks (Transport $transport) {
  $transport->drive();
  $transport->specialAbility();  
}
