# PHP-II Aug 2021

## TODO
* Q: Do you have a link to RFC for return data type of `self`?
* Q: Example of strict_types in interface, abstract class and child class
  * Need to demonstrate exactly where does the declare() need to be executed?
  * Note: Typo3 uses it in all classes: is this necessary?

## Homework
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

## Class Notes
* Predefined constants
  * https://www.php.net/manual/en/reserved.constants.php
* `php.ini` settings: https://www.php.net/manual/en/ini.list.php
* Future directions for the PHP language: https://wiki.php.net/rfc
* Searching for a pattern
```
grep -rn /dir/path -e "SEARCH_ITEM"
```

## Resources
* https://github.com/dbierer/classic_php_examples
* 

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
