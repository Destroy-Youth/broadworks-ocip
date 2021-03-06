<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Restrictions;


/**
 * Class Length - Specifies the exact number of characters or list items allowed. Must be equal to or greater than zero.
 *
 * @package BroadworksOCIP\Builder\Restrictions
 */
class Length extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        $length = strlen($input);
        $valid = (strlen($input) === (int)$this->value);
        ($valid)
            ? $this->detail("Valid: String length of $length is valid, required length is {$this->value}")
            : $this->detail("Failed: String length of $length is invalid, required length is {$this->value}");
        return $valid;
    }
}