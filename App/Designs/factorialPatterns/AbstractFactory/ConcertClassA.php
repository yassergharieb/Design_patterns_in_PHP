<?php 
namespace  App\Designs\factorialPatterns\AbstractFactory;
use App\Designs\factorialPatterns\AbstractFactory\AbstractProductA;
class ConcertClassA implements AbstractProductA {

 
    public function doSomeThingInAnotherContext () {
        return "THIS IS JUST CAME FROM ConcertClassA ";
    }
    
}