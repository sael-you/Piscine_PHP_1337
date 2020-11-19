<?php
class Tyrion extends Lannister
{
    public function sleepWith($x)
    {
    if($x instanceof Lannister )
        print("Not even if I'm drunk !" . PHP_EOL);
    if($x instanceof Stark )
        print("Let's do this".PHP_EOL);
    }
}


?>