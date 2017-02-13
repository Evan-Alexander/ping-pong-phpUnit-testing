<?php

    class PingPong
    {
        function makePingPong($input_number)
        {
            $output_array = array();
            $i = 1;
            while ($i <= $input_number) {
                if ($i % 5 == 0) {
                    array_push($output_array, "pong");
                }
                else if ($i % 3 == 0) {
                    array_push($output_array, "ping");
                } else {
                    array_push($output_array, $i);
                }
                ++$i;
            }
            return $output_array;
        }
    }
?>
