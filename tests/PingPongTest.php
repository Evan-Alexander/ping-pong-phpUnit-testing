<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong()
        {
            // Arrange
            $test_PingPong = new PingPong;
            $input = 3;



            //Act
            $result = $test_PingPong->makePingPong($input);


            //assert

            $this->assertEquals(array (1,2,3), $result);
        }
    }

?>
