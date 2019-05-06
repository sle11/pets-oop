<?php

class Pet {
    private $_name;
    private $_color;

    function eat() {
        echo "<p>".$this->_name . " is my name </p>";
    }

    function talk() {
        echo "<p>".$this->_name . " can talk! </p>";
    }

    function sleep() {
        echo "<p>".$this->_name . " is sleeping </p>";
    }
}