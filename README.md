# grid-guesser

A simple guessing game app. Find the hidden winning square in a grid.


## Tech used

* PHP 7.1 - for backend logic and templating
* Composer - for autoloading PHP
* Javascript ES6 - for the game logic
* SCSS - For the styling
* PHPUnit - for unit tests
* Gulp - as a task runner

## Installing and running the app

To simply install the app and get it running (see the section below if you want to do further development on it):

`Git clone` this repo onto your local virtual machine - if you don't have one set up, I used Vagrant https://www.vagrantup.com/.

If you don't have it on your machine already - install Composer https://getcomposer.org/ - you can either install locally to your new directory, or globally.

Run `composer install` to install the dependencies needed to run the project. 

Navigate your browser within the project file to `/app/index.php`

Have a play!

## Further development on the app

For further development on the app I would additionally recommend:

* Installing Node Package manager - https://www.npmjs.com/get-npm
  * Using npm to get Gulp - https://gulpjs.com/
  * Install gulp-sass `npm install node-sass gulp-sass --save-dev`
  
You can now use the Gulpfile included in the project to automatically generate your CSS files from SCSS - just use the command `gulp watch` in your project directory.
  
## Tests

Tests can be run with PHPUnit. If you've run `composer install` - Composer will have installed PHPUnit as a dependency.

To run the unit tests, navigate to `/test/src/Classes` in the project file.

You can then run tests with `phpunit [filename]`