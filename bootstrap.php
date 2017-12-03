<?php

declare(strict_types=1);

/*
 * This file is part of the adventofcode project.
 *
 * @author     pierre
 * @copyright  Copyright (c) 2017
 */

class Input
{
    private static $input;

    public static function getInput()
    {
        return self::$input;
    }

    public static function setInput($input)
    {
        self::$input = $input;
    }
}

function getInput()
{
    return Input::getInput();
}

function setInput($input)
{
    Input::setInput($input);
}