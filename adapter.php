<?php

    class XXCircle {
        function displayIt() {
            echo "displayIt from XXCircle\n";
        }
        
        function fillIt() {
            echo "fillIt from XXCircle\n";
        }
    }
    
    abstract class Shape
    {
        function setLocation() {
            echo "set location\n";
        }
        
        function getLocation() {
            echo "get location\n";
        }
        
        abstract protected function display();
        abstract protected function fill();
        
        function setColor() {
            echo "set color\n";
        }
        
        function undisplay() {
            echo "undisplay\n";
        }
    }
    
    class Point extends Shape {
        function display() {
            echo "display Point\n";
        }
        
        function fill() {
            echo "fill Point\n";
        }
    }
    
    class Line extends Shape {
        function display() {
            echo "display Line\n";
        }
        
        function fill() {
            echo "fill Line\n";
        }
    }
    
    class Square extends Shape {
        function display() {
            echo "display Square\n";
        }
        
        function fill() {
            echo "fill Square\n";
        }
    }
    
    class Circle extends Shape {
        protected $circle;
        
        function __construct() {
            $this->circle = new XXCircle();
        }
        
        function display() {
            echo $this->circle->displayIt();
        }
        
        function fill() {
            echo $this->circle->fillIt();
        }
    }
    
    $p = new Point();
    $l = new Line();
    $s = new Square();
    $c = new Circle();
    
    $shapes = array();
    array_push($shapes, $p, $l, $s, $c);
    
    for($i = 0; $i < count($shapes); $i++) {
        $inst = $shapes[$i];
        $inst->display();
        $inst->fill();
    }
 
