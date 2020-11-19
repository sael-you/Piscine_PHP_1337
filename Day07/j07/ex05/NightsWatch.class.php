<?php
class NightsWatch  {
    public $fighters = array();
   
    public function recruit($x)
    {
        if ($x instanceof IFighter)
            $this->fighters[] = $x;
    }
    public function fight()
    {
        foreach ($this->fighters as $key) {
            $key->fight();
        }
    }
}
?>