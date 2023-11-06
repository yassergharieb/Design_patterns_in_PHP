<?php 
use App\Designs\factorialPatterns\AbstractFactory\AbstractProductA;
use App\Designs\factorialPatterns\AbstractFactory\AbstractProductB;

interface FactoryInterface {
    
    public function createFactoryA():AbstractProductA;
    public function createFactoryB():AbstractProductB;


}