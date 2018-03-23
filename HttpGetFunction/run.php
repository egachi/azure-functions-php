<?php
    //Sample custom php function
    function print_Json($name, $age, $id)
    {
        return "{ \"name\" : '$name', \"age\" : '$age',  \"user_id\" : '$id'} ";
    }

    //Printing variables in console
    echo "Printing in console with echo \r\n";
    fwrite(STDOUT, "Printing in console with fwrite \r\n");
    print_r("Printing in console with print_r \r\n");

    //Getting REQ variables
    $req_original_url = getenv('REQ_ORIGINAL_URL');
    print_r("REQ_ORIGINAL_URL: '$req_original_url' \r\n");
    $req_method =  getenv('REQ_METHOD');
    print_r("REQ_METHOD: '$req_method' \r\n");
    $completed_querystring = getenv('REQ_QUERY'); 
    print_r("REQ_QUERY: '$completed_query' \r\n");

    //Getting Query variables
    $name = getenv('REQ_QUERY_name');
    print_r("name: '$name' \r\n");
    $age = getenv('REQ_QUERY_age');
    print_r("age: '$age' \r\n");

    //Getting Request headers
    $sample_header = getenv('REQ_HEADERS_X-Sample-Test');
    print_r("X-Sample-Test: '$sample_header' \r\n");

    $id  = getenv('REQ_PARAMS_id');
    print_r("USER_ID: '$id' \r\n");

    //Testing Azure timeout value in host
    $time = 7*60;
    # waiting...        
    sleep($time);
    # work after 420 seconds
    
    //How to send response, this for JSON Object content type.
    file_put_contents(getenv('res'),print_Json($name,$age,$id));
?>