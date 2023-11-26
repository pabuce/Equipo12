<?php
    function estimarPersonalNecesario($estimacionAfluencia) {
        for($i=0; $i<count($estimacionAfluencia); $i++) {
            $estimacionPersonal[$i] = ceil($estimacionAfluencia[$i] / 3);
        }
        return $estimacionPersonal;
    }
?>
