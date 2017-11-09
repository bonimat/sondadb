<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 07/11/17
 * Time: 14.53
 */

use PHPUnit\Framework\TestCase;


class DBTest extends TestCase
{
    function testDB(){
        $database = new DB('localhost','root','bonimat');
        $query= "SELECT 1 FROM DUAL";
        $response = $database->select($query);

        $this->assertEquals(1,$response->num_rows);

    }

}
