#!/usr/bin/php
<?php
    printf("Enter a number: ");
    $input = trim(fgets(STDIN), "\n\r");
    $flag = 0;
    while(!(feof(STDIN)))
    {
        $counter = 0;
        $flag = 0;
        while($input[$counter])
        {
            if($input[$counter] == '-' && flag == 0)
            {
                $flag++;
                $counter++;
            }
            if(!($bol = ctype_digit($input[$counter])))
                break ;
            $counter++;
        }
        if ($bol)
        {
            $index = strlen($input) - 1;
            $number = intval($input[$index]);
            if($number % 2 == 0)
                printf("The number $input is even\n");
            else
                printf("The number $input is odd\n");
        }
        else
            printf("'$input' is not a number\n");
        printf("Enter a number: ");
        $input = rtrim(fgets(STDIN), "\n\r");
    }
    printf("\n");
    exit();
?>