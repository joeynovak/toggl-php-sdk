# Toggl PHP SDK #

Provides a re-usable PHP library for interacting with the Toggl time tracking
system's API.

* Original Author: Dave Reid http://www.davereid.net/
* CakePHP Vendor Changes: Joey Novak http://joeynovak.com
* Website: https://github.com/joeynovak/toggl-php-sdk/
* License: GPLv2/MIT
* Thanks: [tanel](https://github.com/tanel)

## Requirements ##

* PHP 5.3 or higher
* [cURL](http://us.php.net/manual/en/book.curl.php) extension
* [JSON](http://us.php.net/manual/en/book.json.php) extension
* [PHPUnit](http://www.phpunit.de/) (for unit testing)

## Usage ##

```
<?php

/*
      
    	Resource strings available to the loadAll() function:
			sessions;
			me;
			time_enties;
			workspaces;
			clients;
			projects;
			tasks;
			tags;   	
    	
*/
  	
$api_token = '00000000000000000000000000000000'; // Valid Toggl.com API token
$connection = new toggl($api_token);
$output = '<pre>' . print_r($connection->userLoad(),1) . '</pre>';
$output .= '<pre>' . print_r($connection->loadAll('projects'),1) . '</pre>';
  	
print $output;
?>
```

## License ##

The Toggl PHP SDK is dual licensed under the MIT and GPLv2 licenses.

## Unit Tests ##

To run the unit tests included with the SDK, you must have PHPUnit installed.
From the Toggl SDK directory, run `phpunit tests` to run all tests.
