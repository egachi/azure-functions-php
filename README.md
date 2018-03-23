# Azure Function with PHP

This is a sample function just for testing. 
PHP is a language that is in experimental mode for now.
There is not support for this right now.

## Getting Started

You can use this repository to deploy to an Azure Function.

### Prerequisites

You need to create the Azure Function first in portal.

This demo is designed for hosting a function inside App Service Plan because the host.json file has 10 mins of timeout.
For Consumption Plan you will have just 5 mins. You need to change this value in host.json file.
```
{
    "functionTimeout" : "00:10:00"
}
```

### Printing data in console
For printing variables in console, some examples:
```
echo "Printing in console with echo \r\n";
```
fwrite function
```
fwrite(STDOUT, "Printing in console with fwrite \r\n");
```
using print_r
```
print_r("Printing in console with print_r \r\n");
```

## Getting data from Environment variables

For Azure Functions you can get environment the data using these variables:

* REQ_ORIGINAL_URL
* REQ_METHOD
* REQ_QUERY
* REQ_QUERY_<queryname>
* REQ_HEADERS_<headername>
* REQ_PARAMS_<paramname>

```
    $req_original_url = getenv('REQ_ORIGINAL_URL');
```
```
    $id  = getenv('REQ_PARAMS_id');
```

### Route params

I have added a route inside function.json

```
    "route": "users/{id:int?}",
```

So I can request my function like this: 
https://{azurefunctionname}.azurewebsites.net/api/users/{id}?code=/{somerandomcode}&param1=value&param2=value


### Some useful references

* [Http Functions](https://github.com/Azure/azure-functions-host/wiki/Http-Functions) - Azure Function Http Functions
* [Types of Functions](https://docs.microsoft.com/en-us/azure/azure-functions/functions-scale) - Azure Functions scale and hosting
* [Samples and content](https://github.com/Azure/Azure-Functions/wiki/Samples-and-content) - Wiki
* [Azure Function On Linux](https://docs.microsoft.com/en-us/azure/azure-functions/functions-create-function-linux-custom-image) - Using a Custom image (Preview)
