<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Maximum Call Time for Answered Calls
 */
class CallProcessingMaxCallTimeForAnsweredCallsMinutes extends SimpleType
{
    public $elementName = "CallProcessingMaxCallTimeForAnsweredCallsMinutes";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("5"));
        $this->addRestriction(new MaxInclusive("2880"));
    }
}
