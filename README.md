# PHP Colorfy 

The simple PHP library to colorfy your console/browser returns and get it awesome!
<br><br>
## Installing

To install PHP Colorfy, you just have to run: 
```sh
composer require leo-nog\colorfy
```
<br>

## How to use

To colorfy your console you can just do like the example above:

#### Text Colors
```php
<?php
require __DIR__.'vendor/autoload.php';

use Colorfy/Colorfy;

echo Colorfy::default("Important text here\n"); // Default color selected on terminal (or black if displaying on browser)
echo Colorfy::black("Important text here\n"); // Black
echo Colorfy::white("Important text here\n"); // White
echo Colorfy::gray("Important text here\n"); // Gray
echo Colorfy::red("Important text here\n"); // Red
echo Colorfy::green("Important text here\n"); // Green
echo Colorfy::blue("Important text here\n"); // Blue
echo Colorfy::yellow("Important text here\n"); // Yellow
echo Colorfy::magenta("Important text here\n"); // Magenta
echo Colorfy::cyan("Important text here\n"); // Cyan
echo Colorfy::lightGray("Important text here\n"); // Light Gray
echo Colorfy::lightRed("Important text here\n"); // Light Red
echo Colorfy::lightGreen("Important text here\n"); // Light Green
echo Colorfy::lightBlue("Important text here\n"); // Light Blue
echo Colorfy::lightYellow("Important text here\n"); // Light Yellow
echo Colorfy::lightMagenta("Important text here\n"); // Light Magenta
echo Colorfy::lightCyan("Important text here\n"); // Light Cyan
```

#### Background Colors
```php
<?php
require __DIR__.'vendor/autoload.php';

use Colorfy/Colorfy;

echo Colorfy::default("Important text here\n", 'default'); // Default color selected on terminal (or white if displaying on browser)
echo Colorfy::default("Important text here\n", 'black'); // Black
echo Colorfy::default("Important text here\n", 'white'); // White
echo Colorfy::default("Important text here\n", 'gray'); // Gray
echo Colorfy::default("Important text here\n", 'red'); // Red
echo Colorfy::default("Important text here\n", 'green'); // Green
echo Colorfy::default("Important text here\n", 'blue'); // Blue
echo Colorfy::default("Important text here\n", 'yellow'); // Yellow
echo Colorfy::default("Important text here\n", 'magenta'); // Magenta
echo Colorfy::default("Important text here\n", 'cyan'); // Cyan
echo Colorfy::default("Important text here\n", 'lightGray'); // Light Gray
echo Colorfy::default("Important text here\n", 'lightRed'); // Light Red
echo Colorfy::default("Important text here\n", 'lightGreen'); // Light Green
echo Colorfy::default("Important text here\n", 'lightBlue'); // Light Blue
echo Colorfy::default("Important text here\n", 'lightYellow'); // Light Yellow
echo Colorfy::default("Important text here\n", 'lightMagenta'); // Light Magenta
echo Colorfy::default("Important text here\n", 'lightCyan'); // Light Cyan
```
<br>

## Compatibility

The PHP Colorfy lib supports both terminal and browser clients, addapting the return to fit each situation with the same code.
Here is an example:
```php
<?php

include __DIR__.'vendor/autoload.php';

use Colorfy\Colorfy;

echo Colorfy::white('Error! Please, try again later.', red);
```
<em>That example results on:<br></em>
### Console
![image](https://github.com/leo-nog/Colorfy/assets/82295691/4d886d8a-f1f0-4d03-a0c6-b9539a601a24)


### Browser
![image](https://github.com/leo-nog/Colorfy/assets/82295691/c10a247c-64e1-4ce4-9a77-debe099368b9)
