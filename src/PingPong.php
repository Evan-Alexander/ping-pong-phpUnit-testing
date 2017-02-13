<?php

    class PingPong
    {
        function makePingPong($input_number)
        {
            $output_array = array();
            $i = 1;
            while ($i <= $input_number) {
                array_push($output_array, $i);
                ++$i;
            }
            return $output_array;
        }
    }
?>
