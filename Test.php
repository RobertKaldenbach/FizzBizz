<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 10/20/17
 * Time: 9:24 PM
 */

use PHPUnit\Framework\TestCase;
include_once('FizzBuzz.php');

/**
 * Class Test
 */
class Test extends TestCase
{

    /**
     * @return array
     */
    function fizzBuzzProvider(){
        return array(array(1,1,5),
            array(3,'fizz','should be fizz'),
            array(5,'buzz','should be buzz'),
            array(15,'fizzbuzz','should be fizzbuzz'),
            array(6,'fizz','should be fizz'),
            array(30,'fizzbuzz','should be fizzbuzz'),
            array(0,0,'0 should fail'));
    }

    /**
     * @dataProvider fizzBuzzProvider
     */
    function testCalculateFizzBuzz($input,$expected,$message){
        $fizzBuzz = new FizzBuzz();
        $calc=$fizzBuzz->calculateFizzBuzz($input);

        $this->assertEquals($expected,$calc,$message);
    }

    /**
     *
     */
    function testPrintFizzBuzzNumbersBetweenRange(){
        $expected=array(15,30,45,60,75,90,105,120,135,150,165,180,195);
        $fizzBuzz= new FizzBuzz();
        $result = $fizzBuzz->PrintFizzBuzzNumbersBetweenRance(0,200);
        $this->assertEquals($expected,$result,'fizzBuzz failed to print numbers');

    }

}
