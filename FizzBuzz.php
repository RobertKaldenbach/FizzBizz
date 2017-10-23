<?php

/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 10/20/17
 * Time: 9:43 PM
 */
class FizzBuzz
{

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
    }

    public function calculateFizzBuzz($input)
    {
        if($input != 0 ){
            if($input % 15 == 0){
                return 'fizzbuzz';
            }elseif($input % 5 == 0){
                return 'buzz';
            }elseif($input % 3 ==0){
                return 'fizz';
        }
    }
        return $input;
    }

    public function PrintFizzBuzzNumbersBetweenRange($beginning, $end)
    {
        $return =array();
        for($i=$beginning;$i<=$end;$i++){
            if($i % 15 == 0 && $i !=0 ){
                array_push($return,$i);
            }
        }
        return $return;
    }
}