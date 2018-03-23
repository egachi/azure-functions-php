<?php
    //echo "My fist function";
    //$body = file_get_contents(getenv('name'));
    //$body = rtrim($body, "\n\r");
    //fwrite(STDOUT, "PHP script processed request body '$body'\r\n");
    file_put_contents("something","{ \"JSON\" : \"JSON Details\" } ");

    //retrieve original GET string 
// $getReqString = getenv('REQ_QUERY'); 
 
// //remove the ? for the parse_str function $getReqString = substr($getReqString,1,strlen($getReqString)); 
 
// //convert the GET string to an array 
// $parsedRequest = array(); parse_str($getReqString,$parsedRequest); 
 
// //show contents of the new array
// print_r($parsedRequest); 
 
// //show the value of a GET variable 
// echo $parsedRequest["code"]; 


      /* request body */
//   $body = file_get_contents(getenv('req'));
//   $body = rtrim($body, "\n\r");
//   fwrite(STDOUT, "PHP script processed request body '$body'\r\n");

//   /* access query parameter 'test' */
//   $test = getenv('req_query_test');
//   fwrite(STDOUT, "Parameter Test='$test'\r\n");

//   /* access header 'test' */
//   $test = getenv('req_headers_test');
//   fwrite(STDOUT, "Header Test='$test'\r\n");
?>