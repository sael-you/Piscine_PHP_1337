#!/usr/bin/php
<?php
   
    while(!(feof(STDIN)))
    { 
        printf("Enter a number: ");
        $input = trim(fgets(STDIN), "\n\r");
        printf("$input\n");
        $flag = 0;
        while($input[$counter])
        {           
            if($input[$counter] == '-' && $flag == 0 && $counter == 0)
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
            printf("$number\n");
            if($number % 2 == 0)
                printf("The number $input is even\n");
            else
                printf("The number $input is odd\n");
        }
        else
            printf("'$input' is not a number\n");
    }  
    printf("\n");
    exit();
?>