<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong()
        {
            // Arrange
            $test_PingPong = new PingPong;
            $input = 2;



            //Act
            $result = $test_PingPong->makePingPong($input);


            //assert

            $this->assertEquals(array (1,2), $result);
        }

        function test_makePing()
        {
            // Arrange
            $test_Ping = new PingPong;
            $input = 3;



            //Act
            $result = $test_Ping->makePingPong($input);


            //assert

            $this->assertEquals(array (1,2,"ping"), $result);
        }

        function test_makePong()
        {
            // Arrange
            $test_Pong = new PingPong;
            $input = 5;



            //Act
            $result = $test_Pong->makePingPong($input);


            //assert

            $this->assertEquals(array (1,2,"ping",4,"pong"), $result);
        }

        function test_makePingAndPong()
        {
            // Arrange
            $test_PingPong = new PingPong;
            $input = 15;



            //Act
            $result = $test_PingPong->makePingPong($input);


            //assert

            $this->assertEquals(array (1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong"), $result);
        }
    }

?>
