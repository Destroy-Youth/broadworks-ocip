<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse15sp2 or an ErrorResponse.
 *         The response contains a hosted user table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceRequest15sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TrunkGroupKey $trunkGroupKey
    ) {
        $this->trunkGroupKey = $trunkGroupKey;
        $this->args          = func_get_args();
    }

    public function setTrunkGroupKey($trunkGroupKey)
    {
        $trunkGroupKey and $this->trunkGroupKey = new TrunkGroupKey($trunkGroupKey);
    }

    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->value();
    }
}