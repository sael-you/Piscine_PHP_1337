<?php

abstract class House  
{
    public abstract function getHouseName();
    public abstract function getHouseSeat();
    public abstract function getHouseMotto();

    public function introduce()
    {
            print("House ".$this->getHouseName()." of ".$this->getHouseSeat()." : ". '"'.$this->getHouseMotto().'"'.PHP_EOL);
    }
}


?>