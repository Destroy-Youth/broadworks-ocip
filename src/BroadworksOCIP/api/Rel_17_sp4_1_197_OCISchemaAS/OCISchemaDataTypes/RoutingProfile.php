<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Routing Profile.
 */
class RoutingProfile extends SimpleType
{
    public $elementName = "RoutingProfile";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("4"));
        $this->addRestriction(new MaxLength("12"));
    }
}
