# PHP-II Aug 2021

## TODO
* Q: Do you have a link to RFC for return data type of `static`?
* A: https://wiki.php.net/rfc/static_return_type
* Q: Example of strict_types in interface, abstract class and child class
  * Need to demonstrate exactly where does the declare() need to be executed?
  * Note: Typo3 uses it in all classes: is this necessary?
* A: Look at the example `strict_not_strict.php` in this repo
* Q: Examples of well-structured but easy-to-follow code examples?
* A: See: https://github.com/mezzio/mezzio-skeleton
  * If you want to install it, just follow the instructions on the main page
* A: See: https://github.com/dbierer/SimpleHtml
  * Examples on how to run it are on the main page

## Homework
* For Fri 6 Aug 2021
  * Lab: Prepared Statements
  * Lab: Stored Procedure
  * Lab: Transaction
* For Wed 4 Aug 2021
  * Lab: Build Custom Exception Class
  * Lab: Traits
* For Mon 2 Aug 2021
  * Lab: Abstract Classes
  * Lab: Interfaces
  * Lab: Type Hinting
  * Look over the Module 3: OrderApp
* For Fri 30 Jul 2021
  * Lab: Create an Extensible Super Class
  * Lab: Magic Methods
* For Wed 28 Jul 2021
  * Lab: Namespace
  * Lab: Create a Class

## Resources
Examples of OOP
* See: https://github.com/dbierer/classic_php_examples/tree/master/oop
* See: https://github.com/mezzio/mezzio-skeleton
  * If you want to install it, just follow the instructions on the main page
* See: https://github.com/dbierer/SimpleHtml
  * Examples on how to run it are on the main page
Previous PHP II class repositories:
* https://github.com/dbierer/php-ii-jun-2021
* https://github.com/dbierer/php-ii-mar-2021

## Class Notes
* Future directions for the PHP language: https://wiki.php.net/rfc
* Predefined constants
  * https://www.php.net/manual/en/reserved.constants.php
* `php.ini` settings: https://www.php.net/manual/en/ini.list.php
* Searching for a pattern
```
grep -rn /dir/path -e "SEARCH_ITEM"
```
* Late Static Binding
  * See: https://www.php.net/manual/en/language.oop5.late-static-bindings.php
* Discussion on _numeric strings_
  * See: https://wiki.php.net/rfc/saner-numeric-strings
* Common trend: when developing an interface, many developers also define a trait that defines functionality
  * Example: see: https://github.com/laminas/laminas-db/tree/2.13.x/src/Adapter
  * Look at `AdapterAwareInterface` and `AdapterAwareTrait`
* PDO examples
  * See: https://github.com/dbierer/classic_php_examples/tree/master/db
  * To find the exact syntax for any given database, look for the `DSN` reference in the set of Drivers
* Browser cache / `etag`
  * Simplified example: https://github.com/dbierer/php-ii-mar-2021/blob/main/example/browser_cache_example.php
* Email
  * If using a framework, use its email library
  * Stand-alone library: https://github.com/PHPMailer/PHPMailer
  * OOP example using PHPMailer
    * https://github.com/dbierer/SimpleHtml/blob/main/src/Common/Contact/Email.php
  * Using PHP `mail()` only:
    * HTML email: https://github.com/dbierer/classic_php_examples/blob/master/web/email_mail_html.php
* Regular expressions
  * Classic examples: https://github.com/dbierer/classic_php_examples/tree/master/regex
  * Email validation: https://stackoverflow.com/questions/201323/how-can-i-validate-an-email-address-using-a-regular-expression
  * Online Regex Tester: https://regex101.com/
* Composer
  * https://getcomposer.org

## Q & A

* Q: Is there a `php.ini` directive pertaining to nesting level?
* A: PHP does not impose a limit, however the OS and the CPU will have stack pointer.
     This is used to keep track of the current level when dealing with arrays or recursion.
     Eventually your application will overflow the stack at which point normally a segmentation fault occurs.
* A: See: https://stackoverflow.com/questions/4293775/increasing-nesting-function-calls-limit

* Q: Where is the PHP CLI error log in the VM???
* A: `stderr` (which is to say the console)
* A: To change this, alter the `error_log` directive in the `/etc/php/8.0/cli/php.ini` file

* Q: Some examples of using magic methods to achieve specific design goals + common practical uses for magic methods
* A: Example of using `__call()` to implement a "plugin" architecture:
  * See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/PluginManager.php
  * See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/AbstractController.php
    * Look at line 277 (the `__call()` magic method)
* A: Example of using `__call()` in the Laravel `Illuminate\Broadcasting\BroadcastManager` class to call the default driver
  * See: https://github.com/laravel/framework/blob/master/src/Illuminate/Broadcasting/BroadcastManager.php
    * On line 379 note the use of `__call()` to call the default driver instance
* A: Laravel `Illuminate\Container\Container` uses `__get()` and `__set()` to dynamically access container services
  * See: https://github.com/laravel/framework/blob/master/src/Illuminate/Container/Container.php
    * Starts on line 1452


## Errata
* http://localhost:9999/#/2/45: "Final Declaration"
  * should be: "class GuestUser extends UserEntity"
* ETag Header Example: need to change line 21 from:
```
header(" ETag : $etag ");
```
  * to this:
```
header("ETag : $etag ");
```
