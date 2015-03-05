<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to set the active status of Auto Attendant instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantModifyActiveInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ServiceActivation $serviceActivation=null
    ) {
        $this->serviceActivation = $serviceActivation;
        $this->args              = func_get_args();
    }

    public function setServiceActivation($serviceActivation)
    {
        $serviceActivation and $this->serviceActivation = new ServiceActivation($serviceActivation);
    }

    public function getServiceActivation()
    {
        return (!$this->serviceActivation) ?: $this->serviceActivation->value();
    }
}