<?php
    function ft_split($str)
    {
        return(array_reverse(explode(' ', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$str))));
    }
?>