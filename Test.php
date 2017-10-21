<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 10/20/17
 * Time: 9:24 PM
 */

use PHPUnit\Framework\TestCase;
include_once('FizzBuzz.php');

class Test extends TestCase
{

    function fizzBuzzProvider(){
        return array(array(1,1,5),
            array(3,'fizz','should be fizz'),
            array(5,'buzz','should be buzz'),
            array(15,'fizzbuzz','should be fizzbuzz'),
            array(6,'fizz','should be fizz'),
            array(30,'fizzbuzz','should be fizzbuzz'));
    }

    /**
     * @dataProvider fizzBuzzProvider
     */
    function testCalculateFizzBuzz($input,$expected,$message){
        $fizzBuzz = new FizzBuzz();
        $calc=$fizzBuzz->calculateFizzBuzz($input);

        $this->assertEquals($expected,$calc,$message);
    }

}
