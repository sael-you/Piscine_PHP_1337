<?php

class Targaryen
{
    public function getBurned()
    {
        if (method_exists($this,"resistsFire") && $this->resistsfire() === true) {
            return "emerges naked but unharmed";
        }
        return "burns alive";
    }
    
}

?>