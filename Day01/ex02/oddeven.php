#!/usr/bin/php
 <?php
    printf("Enter a number: ");
    $input = trim(fgets(STDIN), " \n\r");
    printf("starting $input\n");
    while(!(($error = feof(STDIN))))
    { 
        printf("error $input\n");
        $counter = 0;
        $flag = 0;
        $inputLen = strlen($input);
        while($inputLen)
        {           
            if($input[$counter] == '-' && $flag == 0 && $counter == 0)
            {
                $flag++;
                $counter++;
                $inputLen--;
            }

            printf("character from input $input[$counter]\n");
            if(!($bol = ctype_digit($input[$counter])))
                break ;
            $counter++;
            $inputLen--;
        }
        printf("flag from input $flag\n");
        printf("counter after while $counter\n");
        printf("bol after while $bol\n");
        if ($bol)
        {
            $index = strlen($input) - 1;
            printf("index of number $index\n");
            $number = intval($input[$index]); 
            printf("number after intval $number\n");
            if($number % 2 == 0)
                printf("The number $input is even\n");
            else
                printf("The number $input is odd\n");
        }
        else
            printf("'$input' is not a number\n");
        printf("Enter a number: ");
        $input = trim(fgets(STDIN), "\n\r");
        printf("input after starting again $input\n");
        $bol = 0;
    }  
    printf("\n");
    exit();
?> 