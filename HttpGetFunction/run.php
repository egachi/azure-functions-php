<?php
    //echo "Printing in console";
    
    //$name = file_get_contents(getenv('name'));
    //$age =  file_get_contents(getenv('age'));

    echo "Printing in console from echo";
    //retrieve original GET string 
    $getReqString = getenv('REQ_QUERY'); 
    //remove the ? for the parse_str function $getReqString = substr($getReqString,1,strlen($getReqString)); 
    //convert the GET string to an array 
    $parsedRequest = array(); parse_str($getReqString,$parsedRequest); 
    //show contents of the new array
    //show the value of a GET variable 
    $name = $parsedRequest["name"];
    $age =  $parsedRequest["age"];
    fwrite(STDOUT, "How to write in console '$name' + '$age'");
    file_put_contents(getenv('res'),"{ \"name\" : \"'$name'\", \"age\" : '$age' } ");
?>