<?php

// Arrange
$test_PingPong = new PingPong;
$input = 3;



//Act
$result = $test_PingPong->makePingPong($input);


//assert

$this->assertEquals(array(), $result);
?>
