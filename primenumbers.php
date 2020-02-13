<?php

function prime_number($n)
{
    $n; // nombre en parametre
    $i = 2; // incrementation
    $flag = 1; // ?


    if(is_int($n)) // si c'est un nombre entier
    {
            if($n < 2 ) // inferieur ou egal a 1
                {
                    return false;
                }

            if($n % $i ==0) // si $n modulo de $i est de 0 donc divisible par $i
                {
                    $flag = 0;
                }
        
            if($flag == 0)
                {
                    return false;
                }

            else
            {
                return true;
            }


            while($i < [($n/2) +1]) // tant que $i est plus petite que ($n divisé par 2) + 1 )t, tu rapelles la variable incrémente le nombre
                {
                    prime_number($n);
                    $i++;
                }

        return TRUE;
    }
}

var_dump(prime_number(5));