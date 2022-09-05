<?php
    class Animal{
        public $cry = "bowbow!";
        function bow() {
            echo $this->cry.PHP_EOL;
        }
    }
    
    class Dog extends Animal {
        public $cry = "bowbow";
    }
    
    class Cat extends Animal{
        public $cry = 'ニャー';
    }
    
    $animal_dog = new Dog();
    echo $animal_dog->bow();
    $animal_Cat = new Cat();
    echo $animal_Cat->bow();
?>