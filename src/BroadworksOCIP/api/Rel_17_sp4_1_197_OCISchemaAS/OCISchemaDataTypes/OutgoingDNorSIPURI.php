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
 * Phone Number or SIP URI that can be used to dial.
 *         URI Validation:
 *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
 *         - don't allow sip:
 *         - allow the following characters in the user portions:
 *           alphanumeric   -   _   .   !   ~   *   '   (   )
 *         - allow the following characters in the host portion:
 *           alphanumeric   -   .
 */
class OutgoingDNorSIPURI extends SimpleType
{
    public $elementName = "OutgoingDNorSIPURI";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("161"));
    }
}
