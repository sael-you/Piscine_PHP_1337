<?php
function ft_is_sort($tab)
{
    $sortedTab = $tab;
    sort($sortedTab);
    return ($tab === $sortedTab);
}
?>