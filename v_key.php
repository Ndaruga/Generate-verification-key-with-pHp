<?php

//generate Verification Key and append the current time stamp
function verification_Key(){
    $array = array(0,1,2,3,4,5,6,7,8,9,
                    'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
                    'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $v_key = "";
    $text = "";
    //$time = time();

    $length = rand(60,61);
    for ($i = 0; $i < $length; $i++){
        $random = rand(0,61);
        $text = $array[$random];
        $v_key .= $text.time();
    }
    return $v_key;

    //echo $v_key;
}

verification_Key();