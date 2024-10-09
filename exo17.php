<?php

function verificationPassword($arg){
    if (strlen($arg)>=8){
        return true;
    }else{
        return false;
    }
}
echo verificationPassword(12345678)

?>