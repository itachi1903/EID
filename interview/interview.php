<?php

            $emailto = "xamzabilal2003@gmail.com";
            $subject = "hello";
            $body = "i was missing you";
            $header = "from  : hamza bilal";
            if (mail($emailto,$subject,$body,$header)) {
                echo "yes";
            }else {
                echo"live hosting chahye yar" ; 
            }

?>