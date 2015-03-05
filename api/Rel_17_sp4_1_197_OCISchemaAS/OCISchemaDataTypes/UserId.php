<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinLength;
use Broadworks_OCIP\core\Builder\Restrictions\MaxLength;


/**
 * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
 *         If the domain is not specified, it is assumed to be the system default domain.
 *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
 *         Hunt Groups, Call Centers....
 *         The domain must not be specified for system-level and service-provider-level administrators.
 */
class UserId extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this->addRestriction(new MinLength(1));
        $this->addRestriction(new MaxLength(161));
    }
}