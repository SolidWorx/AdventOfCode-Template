AdventOfCode Template
=====================

This is a simple template project for the [AdventOfCode](http://adventofcode.com/2017) project in PHP.
The goal of this template is to give people a simple way to test your code against the AdventOfCode samples,
and an easy way to group and run your code

Usage
-----

You need create your own copy of this repository in order to add the code for your challenges.
Getting a copy can be done by either [forking](https://help.github.com/articles/fork-a-repo/) or [cloning](https://help.github.com/articles/cloning-a-repository/) this repository.

You will also need [composer](https://getcomposer.org) in order to install the required dependencies to run your code.

Once you have a copy of the repository, you can hen add all the code for your challenges in the respective directories.
All challenge code lives inside the `src` directory, and is grouped by day. Each part has a separate file where the code needs to be added to complete the challenge.

Each day directory consists of a few files:

* `part1.php` - The code to complete part 1 of the challenge
* `part2.php` - The code to complete part 2 of the challenge
* `test.php` - This is the sample input and results which can be used to run against your code. (This files needs to return an array, which consists of two values, an array for the `input => result` for part 1, and an array with the `input => result` for part 2)
* `input.txt` - This is where you can add your unique input per challenge to be run against your code. This input will be run against the code in both `part1.php` and `part2.php`

After cloning the repository, you can add your code to complete the challenge to the relevant file.

Running your code
-----------------

This project comes with a CLI script that you can run to execute your code.
In order to run the code for all the challenges, execute the `bin/advent` command:

```bash
$ bin/advent
```

This will run all your code with your custom input for all the challenge days. It will run both part 1 and part 2 of each day.

### Running only a specific day

If you only want to run a specific day, add the day you want to run as an argument to the CLI command, E.G:

```bash
$ bin/advent day12
```

### Running the test input against your code

If you would like to run the sample input against your scripts to test your code with the expected result, you can pass the `--test` flag to the command:

```bash
$ bin/advent --test
```

Or run the tests for a specific day:

```bash
$ bin/console day12 --test
```

This will run the samples against your code, as well as your unique input and give you the resul

Getting the input in each script
--------------------------------

To get your unique input in each script, you can use the special `getInput` function.
This function will return either your unique input for the specific date, or it will return the sample input if you used the `--test` flag.
In all cases, the result of calling the `getInput` function will give you valid input to code against.

Contributing
------------

All the sample input of each day and both parts of each day needs to be kept up to date in this repository.
If you have unlocked the second part of any day, and the sample input for that day is not yet added to this repository, then please open a PR to add the sample input.

Any other improvements or features is also welcome.