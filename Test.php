<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 07/11/17
 * Time: 12.46
 */

use PHPUnit\Framework\TestCase;
require_once "sonda.php";
class TestSonda extends TestCase
{
    function testCheck(){
        $sonda = new Sonda();

        $response = $sonda->isOkey();


        $this->assertTrue($response);
    }

}
