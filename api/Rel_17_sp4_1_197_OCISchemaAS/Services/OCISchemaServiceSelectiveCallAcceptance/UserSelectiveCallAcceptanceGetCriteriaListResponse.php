<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSelectiveCallAcceptance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSelectiveCallAcceptanceGetCriteriaRequest.
 *         The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserSelectiveCallAcceptanceGetCriteriaListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $criteriaTable
    ) {
        $this->criteriaTable = $criteriaTable;
        $this->args          = func_get_args();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}