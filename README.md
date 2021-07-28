# PHP-II Aug 2021

## TODO
* Q: Is there a `php.ini` directive pertaining to nesting level?
* A: PHP does not impose a limit, however the OS and the CPU will have stack pointer, 
* A: See: https://stackoverflow.com/questions/4293775/increasing-nesting-function-calls-limit
* Q: Where is the PHP CLI error log in the VM???
* Q: Some examples of using magic methods to achieve specific design goals + common practical uses for magic methods


## Homework
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


## Errata
* http://localhost:9999/#/2/45: "Final Declaration"
  * should be: "class GuestUser extends UserEntity"
