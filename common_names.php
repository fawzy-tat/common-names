<?php
class Names
{
    public static function find_common($array1, $array2)
    {

        return array_unique(array_merge($array1,$array2));
    }
}

$names = Names::find_common(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
