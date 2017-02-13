# Ping Pong Unit Testing

* A program that tests each step of building an app using the Ping Pong game as an example.

#### February 13, 2017

#### By **Jason Brown & Zach Swanson**

## Description
  Practice unit testing in PHP.

| Behavior | Input Example | Output Example |
|----------|---------------|----------------|
| User enters a number. | "3" | 1,2,3 |
| User enters a three, app replaces multiples of 3 with 'ping'. | "3"| 1,2 "ping". |
| User enters a five, app replaces multiples of 5 with 'pong'. | "5"| 1,2 "ping", 4, "pong". |
| User enters a fifteen, app replaces multiples of 15 with 'ping-pong'. | "15"| 1,2 "ping", 4, "pong", ... 14, "ping-pong". |




## Setup/Installation Requirements

*  Clone github repository for places webpage
*  From your parent directory in terminal, run "$ composer install"
*  Run php server in terminal (from web directory) by typing "$ php -S localhost:8000"
*  in your browser type "localhost:8000"
*  Webpage will load.

## Known Bugs
_No known bugs exist._

## Technologies Used
* _HTML_
* _PHP_
* _TWIG_
* _SILEX_
* _Composer_


### License
*MIT

Copyright (c) 2017 Jason Brown & Zach Swanson All Rights Reserved.
