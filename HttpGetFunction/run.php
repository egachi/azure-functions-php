<?php
    echo "My fist function";
    $body = file_get_contents(getenv('name'));
    $body = rtrim($body, "\n\r");
    fwrite(STDOUT, "PHP script processed request body '$body'\r\n");
    file_put_contents("something","{ \"JSON\" : \"JSON Details\" } ");


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