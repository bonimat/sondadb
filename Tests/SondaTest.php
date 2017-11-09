<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 07/11/17
 * Time: 12.46
 *
 * Tests List
 *
 *  1- Invio messaggio di allerta
 *  2- Invio report periodico
 *
 *
 */

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../sonda.php');
class SondaTest extends TestCase {

    function testCheck(){
        $sonda = new Sonda();
        $response = $sonda->underLimit();

        $this->assertFalse($response);
    }

}
