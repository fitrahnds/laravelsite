<?php
    function getTimeDuration($time){
        $assigned_time = $time;
        $completed_time= date("d M Y H:i:s");   

        $d1 = new DateTime($assigned_time);
        $d2 = new DateTime($completed_time);
        $interval = $d2->diff($d1);

        echo $interval->format('%d days, %H hours, %I minutes, %S seconds');
    }
    function echoPre($array){
        echo "<pre>".print_r($array,true)."</pre>";
    }
?>