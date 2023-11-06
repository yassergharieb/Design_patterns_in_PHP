<?php 
namespace  App\Designs\factorialPatterns\AbstractFactory;

use App\Designs\factorialPatterns\AbstractFactory\AbstractProductA;
use App\Designs\factorialPatterns\AbstractFactory\AbstractProductB;
use FactoryInterface;

class ConcertFactory implements FactoryInterface {

  public function createFactoryA():AbstractProductA {
    return new ConcertClassA();
  }  
    

  public function createFactoryB() :AbstractProductB { 
   return new ConcertClassB();
}  
}