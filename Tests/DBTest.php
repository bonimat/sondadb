<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 07/11/17
 * Time: 14.53
 */

use PHPUnit\Framework\TestCase;

require_once('sonda.php');

class DBTest extends TestCase
{
    function testDB(){
        $database = new DB('localhost','root','bonimat');
        $response = $database->select("SELECT 1 FROM DUAL");

        $this->assertEquals(1,$response);

    }

}
