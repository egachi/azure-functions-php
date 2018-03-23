# Azure Function with PHP

This is a sample function for testing

## Getting Started

You can use this github repository to deploy to an azure function

### Prerequisites

You need to create the azure function first in portal.

This demo is designed for host inside App Service Plan because host.json has 10 mins of timeout.
For Consumption Plan you will have just 5 mins.


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

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc