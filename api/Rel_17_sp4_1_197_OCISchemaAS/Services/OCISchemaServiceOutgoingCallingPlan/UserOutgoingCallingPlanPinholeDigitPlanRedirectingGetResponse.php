<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest.
 */
class UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useCustomSettings,
             $userPermissions=null
    ) {
        $this->useCustomSettings = $useCustomSettings;
        $this->userPermissions   = $userPermissions;
        $this->args              = func_get_args();
    }

    public function setUseCustomSettings($useCustomSettings)
    {
        $useCustomSettings and $this->useCustomSettings = new xs:boolean($useCustomSettings);
    }

    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->value();
    }

    public function setUserPermissions($userPermissions)
    {
        $userPermissions and $this->userPermissions = new OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions($userPermissions);
    }

    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->value();
    }
}