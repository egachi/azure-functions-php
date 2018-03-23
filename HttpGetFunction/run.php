<?php
    echo "My fist function";
    $body = file_get_contents(getenv('req'));
    $body = rtrim($body, "\n\r");
    fwrite(STDOUT, "PHP script processed request body '$body'\r\n");
    file_put_contents("{ \"JSON\" : \"JSON Details\" } ");
?>